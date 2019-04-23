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
class Dvorana extends Eloquent
{
	protected $table = 'dvorana';
	protected $primaryKey = 'oznDvorana';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'kapacitet' => 'int'
	];

	protected $fillable = [
	'oznDvorana',
		'kapacitet'
	];
}
