Lavalite package that provides automobile management facility for the cms.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `laraauto/automobile`.

    "laraauto/automobile": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

    Laraauto\Automobile\Providers\AutomobileServiceProvider::class,

And also add it to alias

    'Automobile'  => Laraauto\Automobile\Facades\Automobile::class,

## Publishing files and migraiting database.

**Migration and seeds**

    php artisan migrate
    php artisan db:seed --class=Laraauto\\AutomobileTableSeeder

**Publishing configuration**

    php artisan vendor:publish --provider="Laraauto\Automobile\Providers\AutomobileServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Laraauto\Automobile\Providers\AutomobileServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Laraauto\Automobile\Providers\AutomobileServiceProvider" --tag="view"


## Usage


