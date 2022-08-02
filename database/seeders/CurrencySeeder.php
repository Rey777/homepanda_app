<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Currency::firstOrCreate(['name' => 'Leke', 'code' => 'ALL', 'symbol' => 'Lek']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'USD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Afghanis', 'code' => 'AFN', 'symbol' => '؋']);
        Currency::firstOrCreate(['name' => 'Pesos', 'code' => 'ARS', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Guilders', 'code' => 'AWG', 'symbol' => 'ƒ']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'AUD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'New Manats', 'code' => 'AZN', 'symbol' => 'ман']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'BSD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'BBD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Rubles', 'code' => 'BYR', 'symbol' => 'p.']);
        Currency::firstOrCreate(['name' => 'Euro', 'code' => 'EUR', 'symbol' => '€']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'BZD', 'symbol' => 'BZ$']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'BMD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Bolivianos', 'code' => 'BOB', 'symbol' => '$b']);
        Currency::firstOrCreate(['name' => 'Convertible Marka', 'code' => 'BAM', 'symbol' => 'KM']);
        Currency::firstOrCreate(['name' => 'Pula', 'code' => 'BWP', 'symbol' => 'P']);
        Currency::firstOrCreate(['name' => 'Leva', 'code' => 'BGN', 'symbol' => 'лв']);
        Currency::firstOrCreate(['name' => 'Reais', 'code' => 'BRL', 'symbol' => 'R$']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'GBP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'BND', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Riels', 'code' => 'KHR', 'symbol' => '៛']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'CAD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'KYD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Pesos', 'code' => 'CLP', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Yuan Renminbi', 'code' => 'CNY', 'symbol' => '¥']);
        Currency::firstOrCreate(['name' => 'Pesos', 'code' => 'COP', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Colón', 'code' => 'CRC', 'symbol' => '₡']);
        Currency::firstOrCreate(['name' => 'Kuna', 'code' => 'HRK', 'symbol' => 'kn']);
        Currency::firstOrCreate(['name' => 'Pesos', 'code' => 'CUP', 'symbol' => '₱']);
        Currency::firstOrCreate(['name' => 'Koruny', 'code' => 'CZK', 'symbol' => 'Kč']);
        Currency::firstOrCreate(['name' => 'Kroner', 'code' => 'DKK', 'symbol' => 'kr']);
        Currency::firstOrCreate(['name' => 'Pesos', 'code' => 'DOP ', 'symbol' => 'RD$']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'XCD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'EGP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'Colones', 'code' => 'SVC', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'FKP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'FJD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Cedis', 'code' => 'GHC', 'symbol' => '¢']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'GIP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'Quetzales', 'code' => 'GTQ', 'symbol' => 'Q']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'GGP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'GYD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Lempiras', 'code' => 'HNL', 'symbol' => 'L']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'HKD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Forint', 'code' => 'HUF', 'symbol' => 'Ft']);
        Currency::firstOrCreate(['name' => 'Kronur', 'code' => 'ISK', 'symbol' => 'kr']);
        Currency::firstOrCreate(['name' => 'Rupees', 'code' => 'INR', 'symbol' => 'Rp']);
        Currency::firstOrCreate(['name' => 'Rupiahs', 'code' => 'IDR', 'symbol' => 'Rp']);
        Currency::firstOrCreate(['name' => 'Rials', 'code' => 'IRR', 'symbol' => '﷼']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'IMP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'New Shekels', 'code' => 'ILS', 'symbol' => '₪']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'JMD', 'symbol' => 'J$']);
        Currency::firstOrCreate(['name' => 'Yen', 'code' => 'JPY', 'symbol' => '¥']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'JEP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'Tenge', 'code' => 'KZT', 'symbol' => 'лв']);
        Currency::firstOrCreate(['name' => 'Won', 'code' => 'KPW', 'symbol' => '₩']);
        Currency::firstOrCreate(['name' => 'Won', 'code' => 'KRW', 'symbol' => '₩']);
        Currency::firstOrCreate(['name' => 'Soms', 'code' => 'KGS', 'symbol' => 'лв']);
        Currency::firstOrCreate(['name' => 'Kips', 'code' => 'LAK', 'symbol' => '₭']);
        Currency::firstOrCreate(['name' => 'Lati', 'code' => 'LVL', 'symbol' => 'Ls']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'LBP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'LRD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Switzerland Francs', 'code' => 'CHF', 'symbol' => 'CHF']);
        Currency::firstOrCreate(['name' => 'Litai', 'code' => 'LTL', 'symbol' => 'Lt']);
        Currency::firstOrCreate(['name' => 'Denars', 'code' => 'MKD', 'symbol' => 'ден']);
        Currency::firstOrCreate(['name' => 'Ringgits', 'code' => 'MYR', 'symbol' => 'RM']);
        Currency::firstOrCreate(['name' => 'Rupees', 'code' => 'MUR', 'symbol' => '₨']);
        Currency::firstOrCreate(['name' => 'Pesos', 'code' => 'MXN', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Tugriks', 'code' => 'MNT', 'symbol' => '₮']);
        Currency::firstOrCreate(['name' => 'Meticais', 'code' => 'MZN', 'symbol' => 'MT']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'NAD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Rupees', 'code' => 'NPR', 'symbol' => '₨']);
        Currency::firstOrCreate(['name' => 'Guilders', 'code' => 'ANG', 'symbol' => 'ƒ']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'NZD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Cordobas', 'code' => 'NIO', 'symbol' => 'C$']);
        Currency::firstOrCreate(['name' => 'Nairas', 'code' => 'NGN', 'symbol' => '₦']);
        Currency::firstOrCreate(['name' => 'Krone', 'code' => 'NOK', 'symbol' => 'kr']);
        Currency::firstOrCreate(['name' => 'Rials', 'code' => 'OMR', 'symbol' => '﷼']);
        Currency::firstOrCreate(['name' => 'Rupees', 'code' => 'PKR', 'symbol' => '₨']);
        Currency::firstOrCreate(['name' => 'Balboa', 'code' => 'PAB', 'symbol' => 'B/.']);
        Currency::firstOrCreate(['name' => 'Guarani', 'code' => 'PYG', 'symbol' => 'Gs']);
        Currency::firstOrCreate(['name' => 'Nuevos Soles', 'code' => 'PEN', 'symbol' => 'S/.']);
        Currency::firstOrCreate(['name' => 'Pesos', 'code' => 'PHP', 'symbol' => 'Php']);
        Currency::firstOrCreate(['name' => 'Zlotych', 'code' => 'PLN', 'symbol' => 'zł']);
        Currency::firstOrCreate(['name' => 'Rials', 'code' => 'QAR', 'symbol' => '﷼']);
        Currency::firstOrCreate(['name' => 'New Lei', 'code' => 'RON', 'symbol' => 'lei']);
        Currency::firstOrCreate(['name' => 'Rubles', 'code' => 'RUB', 'symbol' => 'руб']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'SHP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'Riyals', 'code' => 'SAR', 'symbol' => '﷼']);
        Currency::firstOrCreate(['name' => 'Dinars', 'code' => 'RSD', 'symbol' => 'Дин.']);
        Currency::firstOrCreate(['name' => 'Rupees', 'code' => 'SCR', 'symbol' => '₨']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'SGD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'SBD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Shillings', 'code' => 'SOS', 'symbol' => 'S']);
        Currency::firstOrCreate(['name' => 'Rand', 'code' => 'ZAR', 'symbol' => 'R']);
        Currency::firstOrCreate(['name' => 'Rupees', 'code' => 'LKR', 'symbol' => '₨']);
        Currency::firstOrCreate(['name' => 'Kronor', 'code' => 'SEK', 'symbol' => 'kr']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'SRD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Pounds', 'code' => 'SYP', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'New Dollars', 'code' => 'TWD', 'symbol' => 'NT$']);
        Currency::firstOrCreate(['name' => 'Baht', 'code' => 'THB', 'symbol' => '฿']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'TTD', 'symbol' => 'TT$']);
        Currency::firstOrCreate(['name' => 'Lira', 'code' => 'TRY', 'symbol' => '₺']);
        Currency::firstOrCreate(['name' => 'Liras', 'code' => 'TRL', 'symbol' => '£']);
        Currency::firstOrCreate(['name' => 'Dollars', 'code' => 'TVD', 'symbol' => '$']);
        Currency::firstOrCreate(['name' => 'Hryvnia', 'code' => 'UAH', 'symbol' => '₴']);
        Currency::firstOrCreate(['name' => 'Pesos', 'code' => 'UYU', 'symbol' => '$U']);
        Currency::firstOrCreate(['name' => 'Sums', 'code' => 'UZS', 'symbol' => 'лв']);
        Currency::firstOrCreate(['name' => 'Bolivares Fuertes', 'code' => 'VEF', 'symbol' => 'Bs']);
        Currency::firstOrCreate(['name' => 'Dong', 'code' => 'VND', 'symbol' => '₫']);
        Currency::firstOrCreate(['name' => 'Rials', 'code' => 'YER', 'symbol' => '﷼']);
        Currency::firstOrCreate(['name' => 'Zimbabwe Dollars', 'code' => 'ZWD', 'symbol' => 'Z$']);
        Currency::firstOrCreate(['name' => 'Rupees', 'code' => 'INR', 'symbol' => '₹']);
        
    }
}
