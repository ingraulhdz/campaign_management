<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class Crud extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:generator
    {name : Class (singular) for example User}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CRUD operations';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$this->info('Initializing database environment variables...');

        $name = $this->argument('name');
        $this->info('Creating Model ...');
        $this->model($name);
        $this->info('Model created successfully ...');

        $this->info('Creating Controller ...');
        $this->controller($name);
        $this->info('Controller created successfully ...');

        $this->info('Creating Routes ...');
        $this->route($name);
        $this->info('Routes created successfully ...');

        $this->info('Creating Model ...');
        $this->info('Model created successfully ...');

        $this->info('Creating Permissions ...');
        $this->permission($name);
        $this->info('Permissions created successfully ...');

        $this->info('Adding item to main menu ...');
        $this->menu($name);
        $this->info('Item has been added successfully ...');


        $this->info('Creating Views ...');
        $this->info('Creating Index blade ...');
        $this->index($name);
        $this->info('Index blade created successfully ...');

        $this->info('Creating Create blade ...');
        $this->create($name);
        $this->info('Create blade created successfully ...');

        $this->info('Creating Model ...');
        $this->edit($name);
        $this->info('Edit blade created successfully ...');

        $this->info('Creating Show blade ...');
        $this->show($name);
        $this->info('Show created successfully ...');

      
        $this->info('Creating Seeder ...');
        $this->seeder($name);
        $this->info('Seeder created successfully ...');

        $this->info('Module ' . $name . ' has been created.');


        $minusculas = strtolower($name);
        $plural = Str::plural($minusculas);

        // \File::append(base_path('routes/web.php'),
        // 'Route::resource(\'' . $plural. "', [{$name}Controller::class, 'index'])->name('".$plural.".index');");
        // \Artisan::call('make:migration create_'. $plural .'_table --create='.$plural);



    }


    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    // Next, let’s take a look on how we can create a model using the stub inside resources/stubs.
    protected function model($name)
    {
        $modelTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Model')
        );

        file_put_contents(app_path("/Models/{$name}.php"), $modelTemplate);
    }


    protected function request($name)
    {
        $requestTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Request')
        );

        if (!file_exists($path = app_path('/Http/Requests')))
            mkdir($path, 0777, true);

        file_put_contents(app_path("/Http/Requests/{$name}Request.php"), $requestTemplate);
    }



    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Controller')
        );

        file_put_contents(app_path("/Http/Controllers/{$name}Controller.php"), $controllerTemplate);
    }



    protected function route($name)
    {
        $templete = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Route')
        );

        // if(!file_exists($path = app_path('/GeneratedFiles\Routes')))
        //     mkdir($path, 0777, true);
        if (!file_exists($path = base_path("routes/{$name}Routes.php"))) {
            file_put_contents(app_path("../routes/{$name}Routes.php"), $templete);
            //   require __DIR__ . '/PruebaRoutes.php';

            $append = "require __DIR__ . '/" . $name . "Routes.php';";

            \File::append(
                base_path('routes/RoutesModules.php'),
                $append
            );
        }
    }



    protected function permission($name)
    {
        $permissionTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Permission')
        );

        // if(!file_exists($path = app_path('../GeneratedFiles\Permissions')))
        //     mkdir($path, 0777, true);
        if (!file_exists($path = base_path("database/seeders/{$name}PermissionsSeeder.php"))) {
            file_put_contents(base_path("database/seeders/{$name}PermissionsSeeder.php"), $permissionTemplate);
            //\Artisan::call("db:seed --class=".$name."PermissionsSeeder");

            $append = '$this->call(' . $name . 'PermissionsSeeder::class);';

            \File::append(
                base_path('database/seeders/Permissions.php'),
                $append
            );
            \Artisan::call("db:seed --class=" . $name . "PermissionsSeeder");
        }
        //php artisan db:seed --class=UserSeeder
    }




    protected function index($name)
    {
        $template = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Index')
        );
        $plural = strtolower(Str::plural($name));
        if (!file_exists($path = app_path("../resources/views/{$plural}")))
            mkdir($path, 0777, true);
        file_put_contents(app_path("../resources/views/{$plural}/index.blade.php"), $template);
    }



    protected function create($name)
    {
        $template = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Create')
        );
        $plural = strtolower(Str::plural($name));
        if (!file_exists($path = app_path("../resources/views/{$plural}")))
            mkdir($path, 0777, true);
        file_put_contents(app_path("../resources/views/{$plural}/create.blade.php"), $template);
    }




    protected function edit($name)
    {
        $template = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Edit')
        );
        $plural = strtolower(Str::plural($name));
        if (!file_exists($path = app_path("../resources/views/{$plural}")))
            mkdir($path, 0777, true);
        file_put_contents(app_path("../resources/views/{$plural}/edit.blade.php"), $template);
    }



    protected function show($name)
    {
        $template = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Show')
        );
        $plural = strtolower(Str::plural($name));
        if (!file_exists($path = app_path("../resources/views/{$plural}")))
            mkdir($path, 0777, true);
        file_put_contents(app_path("../resources/views/{$plural}/show.blade.php"), $template);
    }



    protected function menu($name)
    {
        $templete = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Menu')
        );

        $plural = strtolower(Str::plural($name));

        if (!file_exists($path = base_path("resources/views/{$plural}/index.blade.php")))
         {
            \File::append(
                base_path('resources/views/front/menu.blade.php'),
                "<li class='nav-item'>
                <a class='nav-link' href=\"{{ route('" . $plural . ".index')}}\">
                    <i class='fas fa-fw fa-check'></i>
                    <span>" . $name . "s</span></a>
            </li>"
            );
        }
    }



    protected function seeder($name)
    {
        $permissionTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Seeder')
        );

        // if(!file_exists($path = app_path('../GeneratedFiles\Permissions')))
        //     mkdir($path, 0777, true);
        if (!file_exists($path = base_path("database/seeders/{$name}sSeeder.php"))) {
            file_put_contents(base_path("database/seeders/{$name}sSeeder.php"), $permissionTemplate);
            //\Artisan::call("db:seed --class=".$name."PermissionsSeeder");

            //$append = '$this->call('.$name.'PermissionsSeeder::class);';

            //  \File::append(base_path('database/seeders/Permissions.php'), 
            //  $append); 
            \Artisan::call("make:migration Create" . $name . "s");
        }
        //php artisan db:seed --class=UserSeeder
    }
}
