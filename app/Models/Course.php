<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'Category',
        'duration',
        'availableSeat',
        'totalSeat',
        'price',
        'pdf_path',
        'image_path',
    ];

    
    public static function recommend(Course $course, int $limit = 4)
    {
        $stopWords = [
            'the',
            'is',
            'a',
            'an',
            'of',
            'and',
            'to',
            'in',
            'for',
            'on',
            'with',
            'that',
            'this',
            'it',
            'as',
            'at',
            'by',
            'from',
            'or',
            'be',
            'are',
            'was',
            'were',
            'has',
            'have',
            'been',
            'its',
            'course'
        ];

        $extractKeywords = function (string $text) use ($stopWords): array {
            $words = preg_split('/\W+/', strtolower($text), -1, PREG_SPLIT_NO_EMPTY);
            return array_values(array_filter($words, fn($w) => strlen($w) > 2 && !in_array($w, $stopWords)));
        };

        $titleKeywords    = $extractKeywords($course->title ?? '');
        $categoryKeywords = $extractKeywords($course->Category ?? '');
        $descKeywords     = $extractKeywords($course->description ?? '');

        // Fetch all courses except the current one
        $others = self::where('id', '!=', $course->id)->get();

        $scored = $others->map(function (Course $candidate) use (
            $titleKeywords,
            $categoryKeywords,
            $descKeywords,
            $extractKeywords
        ) {
            $score = 0;

            $cTitle    = $extractKeywords($candidate->title ?? '');
            $cCategory = $extractKeywords($candidate->Category ?? '');
            $cDesc     = $extractKeywords($candidate->description ?? '');

            // Title keyword overlap → 3 points each
            $score += count(array_intersect($titleKeywords, $cTitle))    * 3;
            $score += count(array_intersect($titleKeywords, $cCategory)) * 3;

            // Category overlap → 2 points each
            $score += count(array_intersect($categoryKeywords, $cTitle))    * 2;
            $score += count(array_intersect($categoryKeywords, $cCategory)) * 2;

            // Description overlap → 1 point each
            $score += count(array_intersect($descKeywords, $cTitle))    * 1;
            $score += count(array_intersect($descKeywords, $cCategory)) * 1;
            $score += count(array_intersect($descKeywords, $cDesc))     * 1;

            $candidate->_score = $score;
            return $candidate;
        });

        return $scored
            ->filter(fn($c) => $c->_score > 0)
            ->sortByDesc('_score')
            ->take($limit)
            ->values();
    }

  
    public static function recommendByQuery(string $query, int $limit = 4)
    {
        $stopWords = [
            'the',
            'is',
            'a',
            'an',
            'of',
            'and',
            'to',
            'in',
            'for',
            'on',
            'with',
            'that',
            'this',
            'it',
            'as',
            'at',
            'by',
            'from',
            'or',
            'be',
            'are',
            'was',
            'were',
            'has',
            'have',
            'been',
            'its',
            'course'
        ];

        $words    = preg_split('/\W+/', strtolower($query), -1, PREG_SPLIT_NO_EMPTY);
        $keywords = array_values(array_filter($words, fn($w) => strlen($w) > 2 && !in_array($w, $stopWords)));

        if (empty($keywords)) {
            return collect();
        }

        $all = self::all();

        $scored = $all->map(function (Course $candidate) use ($keywords) {
            $score = 0;

            foreach ($keywords as $kw) {
                if (stripos($candidate->title,       $kw) !== false) $score += 3;
                if (stripos($candidate->Category,    $kw) !== false) $score += 2;
                if (stripos($candidate->description, $kw) !== false) $score += 1;
            }

            $candidate->_score = $score;
            return $candidate;
        });

        return $scored
            ->filter(fn($c) => $c->_score > 0)
            ->sortByDesc('_score')
            ->take($limit)
            ->values();
    }
}
