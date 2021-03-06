# VATSIM Buttons
These are a set of Bootstrap buttons that display the current VATSIM METAR at some selected airfields as well as a button displaying the total number of users online on the network.

**Note: Make sure you change `require_once 'C:\Users\Administrator\Desktop\Vatsimphp\vendor\autoload.php';` to the path to your `autoload.php` file. `C:\Users\Administrator\Desktop\Vatsimphp\vendor\autoload.php`is unique to my VPS and may be different to yours.**

These buttons make use of [Vatsimphp](https://github.com/skymeyer/Vatsimphp) by [Skymeyer](https://github.com/skymeyer).

## Installation

Assuming you have already installed Composer, CD to your VATSIM Buttons folder and run:

``` bash
$ composer require skymeyer/vatsimphp 1.0.*
```

Or add vatsimphp manually to your composer.json of your current project:

``` json
{
    "require": {
        "skymeyer/vatsimphp": "1.0.*"
    }
}
```

Next, setup a cronjob to run the `vatcron.php` file every 2 minutes.

## Usage

This basic setup gives you buttons for METARs from a range of aerodromes. To add a button for a new airport, add this to your `index.php` file:

``` bash
<li><button style="height: 40px;" 
class="btn btn-primary getMetarButtons hvr-float-shadow" data-location = "***AERODROME ICAO HERE***">
***AERODROME NAME HERE***</button></li>
```

To add a button using data parsed from the `VATSIM Data file`, you will need to make a seperate `.php` file for that particular data set and then add a new script to the `index.php` file in order to run it. More details on how to do this can be found on the VatsimPHP project page [here](https://github.com/skymeyer/Vatsimphp).

## With Thanks To

* Skymeyer.
* Anthony Lawrence.
