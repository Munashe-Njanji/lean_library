<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Author
 *
 * Represents an author entity in the system.
 *
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string|null $birth_date
 * @property string|null $death_date
 * @property string|null $bio
 * @property string|null $nationality
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Book> $books
 * @property-read int|null $books_count
 *
 * @method static \Database\Factories\AuthorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<Author> newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<Author> newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<Author> query()
 * @method static \Illuminate\Database\Eloquent\Builder<Author> whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<Author> whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<Author> whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<Author> whereDeathDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<Author> whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<Author> whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<Author> whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder<Author> whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Author extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name",
        "birth_date",
        "death_date",
        "bio",
        "nationality",
    ];

    /**
     * Get the books written by the author.
     *
     * @return HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
