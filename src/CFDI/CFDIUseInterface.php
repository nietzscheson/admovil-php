<?php

/**
 * @package Nietzscheson\Admovil\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\CFDI;

interface CFDIUseInterface
{
    const ACQUISITION_OF_MERCHANDISE = 'G01';
    const RETURN_DISCOUNT_OR_BONUSES = 'G02';
    const GENERAL_EXPENSES = 'G03';
    const BUILDINGS = 'I01';
    const OFFICE_FURNITURE_AND_EQUIPMENT_FOR_INVESTMENTS = 'I02';
    const TRANSPORTATION_EQUIPMENT = 'I03';
    const COMPUTER_EQUIPMENT_AND_ACCESORIES = 'I04';
    const DIES_AND_TOOLDING = 'I05';
    const TELEPHONE_COMMUNICATIONS = 'I06';
    const SATELLITE_COMMUNICATIONS = 'I07';
    const OTHER_MACHINERY_AND_EQUIPMENT = 'I08';
    const MEDICAL_AND_DENTAL_FEES_AND_HOSPITAL_EXPENSES = 'D01';
    const MEDICAL_EXPENSES_DUE_TO_DISABILITY = 'D02';
    const FUNERAL_EXPENSES = 'D03';
    const DONATIONS = 'D04';
    const REAL_INTEREST_ACTUALLY_PAY_FOR_MORTGAGE_LOANS = 'D05';
    const VOLUNTARY_CONTRIBUTIONS_TO_THE_SAR = 'D06';
    const PREMIUMS_FOR_MEDIAL_EXPENSES_INSURANCE = 'D07';
    const MANDATORY_SCHOOL_TRANSPORTATION_EXPENSES = 'D08';
    const DEPOSITS_IN_ACCOUNTS_FOR_SAVINGS_PREMIUMS_BASED_ON_PENSION_PLANS = 'D09';
    const PAYMENTS_FOR_EDUCATIONAL_SERVICES = 'D10';
    const UNDEFINED = 'P01';
}