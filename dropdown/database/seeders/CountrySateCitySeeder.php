<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
  
class CountrySateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Bangladesh
$bangladesh = Country::create(['name' => 'Bangladesh']);

$state = State::create(['country_id' => $bangladesh->id, 'name' => 'Dhaka']);
City::create(['state_id' => $state->id, 'name' => 'Mohammadpur']);
City::create(['state_id' => $state->id, 'name' => 'Savar']);
City::create(['state_id' => $state->id, 'name' => 'Dhanmondi']);
City::create(['state_id' => $state->id, 'name' => 'Gulshan']);
City::create(['state_id' => $state->id, 'name' => 'Banani']);

$state = State::create(['country_id' => $bangladesh->id, 'name' => 'Cumilla']);
City::create(['state_id' => $state->id, 'name' => 'Chouddagram']);
City::create(['state_id' => $state->id, 'name' => 'Comilla Sadar']);
City::create(['state_id' => $state->id, 'name' => 'Muradnagar']);
City::create(['state_id' => $state->id, 'name' => 'Debidwar']);
City::create(['state_id' => $state->id, 'name' => 'Daudkandi']);

$state = State::create(['country_id' => $bangladesh->id, 'name' => 'Chattogram']);
City::create(['state_id' => $state->id, 'name' => 'Chittagong']);
City::create(['state_id' => $state->id, 'name' => 'Rangamati']);
City::create(['state_id' => $state->id, 'name' => 'Cox\'s Bazar']);
City::create(['state_id' => $state->id, 'name' => 'Bandarban']);
City::create(['state_id' => $state->id, 'name' => 'Khagrachari']);

$state = State::create(['country_id' => $bangladesh->id, 'name' => 'Sylhet']);
City::create(['state_id' => $state->id, 'name' => 'Sylhet City']);
City::create(['state_id' => $state->id, 'name' => 'Beanibazar']);
City::create(['state_id' => $state->id, 'name' => 'Golapganj']);
City::create(['state_id' => $state->id, 'name' => 'Jaintiapur']);
City::create(['state_id' => $state->id, 'name' => 'Bishwanath']);

$state = State::create(['country_id' => $bangladesh->id, 'name' => 'Khulna']);
City::create(['state_id' => $state->id, 'name' => 'Khulna City']);
City::create(['state_id' => $state->id, 'name' => 'Jessore']);
City::create(['state_id' => $state->id, 'name' => 'Satkhira']);
City::create(['state_id' => $state->id, 'name' => 'Bagerhat']);
City::create(['state_id' => $state->id, 'name' => 'Chuadanga']);

$state = State::create(['country_id' => $bangladesh->id, 'name' => 'Rajshahi']);
City::create(['state_id' => $state->id, 'name' => 'Rajshahi City']);
City::create(['state_id' => $state->id, 'name' => 'Natore']);
City::create(['state_id' => $state->id, 'name' => 'Pabna']);
City::create(['state_id' => $state->id, 'name' => 'Naogaon']);
City::create(['state_id' => $state->id, 'name' => 'Bogra']);

// United States
$usa = Country::create(['name' => 'United States']);

$state = State::create(['country_id' => $usa->id, 'name' => 'California']);
City::create(['state_id' => $state->id, 'name' => 'Los Angeles']);
City::create(['state_id' => $state->id, 'name' => 'San Francisco']);
City::create(['state_id' => $state->id, 'name' => 'San Diego']);
City::create(['state_id' => $state->id, 'name' => 'San Jose']);
City::create(['state_id' => $state->id, 'name' => 'Sacramento']);

$state = State::create(['country_id' => $usa->id, 'name' => 'Texas']);
City::create(['state_id' => $state->id, 'name' => 'Houston']);
City::create(['state_id' => $state->id, 'name' => 'Dallas']);
City::create(['state_id' => $state->id, 'name' => 'Austin']);
City::create(['state_id' => $state->id, 'name' => 'San Antonio']);
City::create(['state_id' => $state->id, 'name' => 'Fort Worth']);

$state = State::create(['country_id' => $usa->id, 'name' => 'New York']);
City::create(['state_id' => $state->id, 'name' => 'New York City']);
City::create(['state_id' => $state->id, 'name' => 'Buffalo']);
City::create(['state_id' => $state->id, 'name' => 'Rochester']);
City::create(['state_id' => $state->id, 'name' => 'Albany']);
City::create(['state_id' => $state->id, 'name' => 'Syracuse']);

$state = State::create(['country_id' => $usa->id, 'name' => 'Florida']);
City::create(['state_id' => $state->id, 'name' => 'Miami']);
City::create(['state_id' => $state->id, 'name' => 'Orlando']);
City::create(['state_id' => $state->id, 'name' => 'Tampa']);
City::create(['state_id' => $state->id, 'name' => 'Jacksonville']);
City::create(['state_id' => $state->id, 'name' => 'Tallahassee']);

// Canada
$canada = Country::create(['name' => 'Canada']);

$state = State::create(['country_id' => $canada->id, 'name' => 'Ontario']);
City::create(['state_id' => $state->id, 'name' => 'Toronto']);
City::create(['state_id' => $state->id, 'name' => 'Ottawa']);
City::create(['state_id' => $state->id, 'name' => 'Mississauga']);
City::create(['state_id' => $state->id, 'name' => 'Brampton']);
City::create(['state_id' => $state->id, 'name' => 'Hamilton']);

$state = State::create(['country_id' => $canada->id, 'name' => 'Quebec']);
City::create(['state_id' => $state->id, 'name' => 'Montreal']);
City::create(['state_id' => $state->id, 'name' => 'Quebec City']);
City::create(['state_id' => $state->id, 'name' => 'Laval']);
City::create(['state_id' => $state->id, 'name' => 'Gatineau']);
City::create(['state_id' => $state->id, 'name' => 'Longueuil']);

$state = State::create(['country_id' => $canada->id, 'name' => 'British Columbia']);
City::create(['state_id' => $state->id, 'name' => 'Vancouver']);
City::create(['state_id' => $state->id, 'name' => 'Victoria']);
City::create(['state_id' => $state->id, 'name' => 'Surrey']);
City::create(['state_id' => $state->id, 'name' => 'Burnaby']);
City::create(['state_id' => $state->id, 'name' => 'Richmond']);

$state = State::create(['country_id' => $canada->id, 'name' => 'Alberta']);
City::create(['state_id' => $state->id, 'name' => 'Calgary']);
City::create(['state_id' => $state->id, 'name' => 'Edmonton']);
City::create(['state_id' => $state->id, 'name' => 'Red Deer']);
City::create(['state_id' => $state->id, 'name' => 'Lethbridge']);
City::create(['state_id' => $state->id, 'name' => 'St. Albert']);

// India
$country = Country::create(['name' => 'India']);

$state = State::create(['country_id' => $country->id, 'name' => 'Gujarat']);
City::create(['state_id' => $state->id, 'name' => 'Rajkot']);
City::create(['state_id' => $state->id, 'name' => 'Surat']);
City::create(['state_id' => $state->id, 'name' => 'Ahmedabad']);
City::create(['state_id' => $state->id, 'name' => 'Vadodara']);
City::create(['state_id' => $state->id, 'name' => 'Bhavnagar']);

$state = State::create(['country_id' => $country->id, 'name' => 'Maharashtra']);
City::create(['state_id' => $state->id, 'name' => 'Mumbai']);
City::create(['state_id' => $state->id, 'name' => 'Pune']);
City::create(['state_id' => $state->id, 'name' => 'Nagpur']);
City::create(['state_id' => $state->id, 'name' => 'Nashik']);
City::create(['state_id' => $state->id, 'name' => 'Aurangabad']);

$state = State::create(['country_id' => $country->id, 'name' => 'Karnataka']);
City::create(['state_id' => $state->id, 'name' => 'Bengaluru']);
City::create(['state_id' => $state->id, 'name' => 'Mysuru']);
City::create(['state_id' => $state->id, 'name' => 'Mangaluru']);
City::create(['state_id' => $state->id, 'name' => 'Hubballi']);
City::create(['state_id' => $state->id, 'name' => 'Belagavi']);

$state = State::create(['country_id' => $country->id, 'name' => 'Tamil Nadu']);
City::create(['state_id' => $state->id, 'name' => 'Chennai']);
City::create(['state_id' => $state->id, 'name' => 'Coimbatore']);
City::create(['state_id' => $state->id, 'name' => 'Madurai']);
City::create(['state_id' => $state->id, 'name' => 'Tiruchirappalli']);
City::create(['state_id' => $state->id, 'name' => 'Salem']);

$state = State::create(['country_id' => $country->id, 'name' => 'West Bengal']);
City::create(['state_id' => $state->id, 'name' => 'Kolkata']);
City::create(['state_id' => $state->id, 'name' => 'Howrah']);
City::create(['state_id' => $state->id, 'name' => 'Durgapur']);
City::create(['state_id' => $state->id, 'name' => 'Asansol']);
City::create(['state_id' => $state->id, 'name' => 'Siliguri']);
  
    }
}