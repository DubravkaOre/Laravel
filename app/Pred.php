<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 09 Apr 2019 08:08:59 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Dvorana
 * 
 * @property string $oznDvorana
 * @property int $kapacitet
 *
 * @package App\Models
 */
class Pred extends Eloquent
{
	protected $table = 'pred';
	protected $primaryKey = 'sifPred';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sifOrgjed' => 'int'
	];

	protected $fillable = [
	'sifPred',
		'kratPred',
		'nazPred',
		'sifOrgjed',
		'upisanoStud',
		'brojSatiTjedno',
	];
}