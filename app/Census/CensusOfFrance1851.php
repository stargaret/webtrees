<?php
/**
 * webtrees: online genealogy
 * Copyright (C) 2016 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace Fisharebest\Webtrees\Census;

/**
 * Definitions for a census
 */
class CensusOfFrance1851 extends CensusOfFrance implements CensusInterface {
	/**
	 * When did this census occur.
	 *
	 * @return string
	 */
	public function censusDate() {
		return '1851';
	}

	/**
	 * The columns of the census.
	 *
	 * @return CensusColumnInterface[]
	 */
	public function columns() {
		return array(
			new CensusColumnSurname($this, 'XXXX', 'XXXX'),
			new CensusColumnGivenNames($this, 'XXXX', 'XXXX'),
			new CensusColumnOccupation($this, 'XXXX', 'XXXX'),
			new CensusColumnAge($this, 'XXXX', 'XXXX'),
			new CensusColumnConditionEnglish($this, 'XXXX', 'XXXX'),
			new CensusColumnNationality($this, 'XXXX', 'XXXX'),
			new CensusColumnNull($this, 'XXXX', 'XXXX'),
			new CensusColumnNull($this, 'XXXX', 'XXXX'),
		);
	}
}
