# Grav Cachebuster Plugin

`cachebuster` is a simple [Grav](http://github.com/getgrav/grav) plugin that allows you to easily clear Grav's cache.

# Installation

Installing the Cachebuster plugin can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install cachebuster

This will install the Cachebuster plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/cachebuster`.

## Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `cachebuster`. You can find these files either on [GitHub](https://github.com/Gertt/grav-plugin-cachebuster) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/cachebuster

>> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) to function

# Usage

Visit the url defined by `route` in your settings to clear the cache.

To prevent abuse, the cachebuster plugin is disabled on installation and does not provide a route by default. This is to ensure users must go through the effort of choosing their own secret route. Please don't choose an obvious route because by repeatedly clearing your cache, persons with malicious intents can significantly degrade performance of your site.

**Note:** route must start with a forward slash `/`.

You can do this configuration in the plugin's configuration.  Simply copy the `user/plugins/cachebuster/cachebuster.yaml` into `user/config/plugins/cachebuster.yaml` and make your modifications.

```
enabled: true    # global enable/disable the entire plugin
route: /cachebuster    # choose a different url
```

# Updating

As development for the Cachebuster plugin continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. Updating Cachebuster is easy, and can be done through Grav's GPM system, as well as manually.

## GPM Update (Preferred)

The simplest way to update this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update cachebuster

This command will check your Grav install to see if your Cachebuster plugin is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The plugin will automatically update and clear Grav's cache.

## Manual Update

Manually updating Cachebuster is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/plugins/cachebuster` directory.
* Download the new version of the Cachebuster plugin from either [GitHub](https://github.com/Gertt/grav-plugin-cachebuster) or [GetGrav.org](http://getgrav.org/downloads/plugins#extras).
* Unzip the zip file in `your/site/user/plugins` and rename the resulting folder to `cachebuster`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/plugins`) will remain intact.
