# Cauldron Overflow

Following [symfony cast's](https://symfonycasts.com/screencast/symfony/setup) tutorial.

## Create new Symfony project
```bash
symfony new project_name
# or
composer create-project symfony/skeleton project_name
```

## Run the webserver
```bash
# run this command only once
symfony server:ca:install
# HTTPS self signed server
symfony server:start
symfony serve

# or a normal php server
php -S 127.0.0.1:8000 -t public/
```

You can also use `symfony serve -d` to run it in background (as a demon) and stop it with `symfony server:stop`

## Notes taken during the course
`public` is the document root. In contains the front controller: `index.php` \
A `route` defines the URL of the page, while the `controller` defines where you write PHP code to build that page.

Add the **annotations**:
```bash
composer require annotations
```

### bin/console Tool
```bash
# execute the console.php file inside bin folder
php bin/console

# run this command to see the list of all commands available that could help with debugging
php bin/console list debug
```

```bash
# list all the registered routes in your application
php bin/console debug:router
```

### Symfony Flex
Symfony Flex is a tool to help construct Symfony applications, but it's implemented as a simple Composer plugin. The biggest super power of Flex is its recipe system: when you install a package, if that package has a recipe, it will configure itself by adding configuration files or making other small changes to your app.

See [flex](https://flex.symfony.com/) homepage.

```bash
# install
composer require sec-checker

# run a new command from bin/console
php bin/console security:check

# remove
composer remove sec-checker
```

### Recipes
```bash
composer recipes

# gives the following output
                      
 Available recipes.   
                      

 * doctrine/annotations 
 * sensio/framework-extra-bundle 
 * sensiolabs/security-checker 
 * symfony/console 
 * symfony/flex 
 * symfony/framework-bundle 
 * symfony/routing 

Run:
 * composer recipes vendor/package to see details about a recipe.
 * composer recipes:install vendor/package --force -v to update that recipe.
```

Twig needs only if API have to perform some tasks.\
See [Chapter 8](https://symfonycasts.com/screencast/symfony/twig-recipe#play) and [Chapter 9](https://symfonycasts.com/screencast/symfony/twig).

### Profiler
```bash
composer require profiler --dev
```

The `--dev` flag is used to specify that this package won't be used in production.\
It adds the following lines to `composer.json`

```bash
"require-dev": {
  "symfony/stopwatch": "^5.2",
  "symfony/twig-bundle": "^5.2",
  "symfony/web-profiler-bundle": "^5.2"
}
```

If you run `git status` on the root folder of the project:
```bash
On branch main
Your branch is up to date with 'origin/main'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
	modified:   composer.json
	modified:   composer.lock
	modified:   config/bundles.php
	modified:   symfony.lock

Untracked files:
  (use "git add <file>..." to include in what will be committed)
	config/packages/dev/
	config/packages/test/twig.yaml
	config/packages/test/web_profiler.yaml
	config/packages/twig.yaml
	config/routes/dev/web_profiler.yaml
	templates/

no changes added to commit (use "git add" and/or "git commit -a")
```

I have to watch [this](https://symfonycasts.com/screencast/symfony/console#play) lesson.