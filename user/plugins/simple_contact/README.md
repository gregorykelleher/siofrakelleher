# Grav Simple Contact Plugin

`Simple Contact` is a [Grav](http://github.com/getgrav/grav) v0.9.7+ plugin and add the simple contact form in Grav pages.

# Installation

Installing the plugin can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install simple_contact

This will install the SimpleContact plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/simple_contact`.

## Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `simplecontact`. You can find these files either on [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/simple_contact

>> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav), the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) plugins, and a theme to be installed in order to operate.

# Usage

The plugin comes with some sensible default configuration, that are pretty self explanatory:

# Options

    enabled: (true|false)               // Enables or Disables the entire plugin for all pages.

    subject: (string)                   // Subject for email.
    recipient: (string)                 // Email address.

    fields:                             // Default fields, you can translate the text label and placeholder.
      name:
        label: "Name"
        placeholder: "Add your name"

      email:
        label: "Email"
        placeholder: "Add your email"

      message:
        label: "Message"
        placeholder: "Add your message"

      antispam:
        label: "Antispam"
        placeholder: "Please leave this field empty for Antispam"

      submit:
        label: "Submit"

    messages:                           // Default messages, you can translate the text.
      success: "Thank You! Your message has been sent."
      error: "Oops! There was a problem with your submission. Please complete the form and try again."
      fail: "Oops! Something went wrong and we couldn't send your message."

To customize the plugin, you first need to create an override config. To do so, create the folder `user/config/plugins` (if it doesn't exist already) and copy the [simple_contact.yaml](simple_contact.yaml) config file in there and then make your edits.

Also you can override the default options per-page:

    ---
    title: 'My "Page"'

    simple_contact:
      subject: "New contact from your Grav site!"
      recipient: "pippo@example.it"

      fields:
        name:
          label: "Name"
          placeholder: "Add your name"

        email:
          label: "Email"
          placeholder: "Add your email"

        message:
          label: "Message"
          placeholder: "Add your message"

        antispam:
          label: "Antispam"
          placeholder: "Please leave this field empty for Antispam"

        submit:
          label: "Submit"

      messages:
        success: "Thank You! Your message has been sent."
        error: "Oops! There was a problem with your submission. Please complete the form and try again."
        fail: "Oops! Something went wrong and we couldn't send your message."
    ---

    # "Lorem ipsum dolor sit amet"

Or if you want use a config options then you can easy use this method:

    ---
    title: 'My "Page"'

    simple_contact: true
    ---

    # "Lorem ipsum dolor sit amet"

With this method you use the config file options instead you write the options in the page header.

# Updating

As development for this plugin continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. Updating this plugin is easy, and can be done through Grav's GPM system, as well as manually.

## GPM Update (Preferred)

The simplest way to update this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update simple_contact

This command will check your Grav install to see if your plugin is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The plugin will automatically update and clear Grav's cache.

## Manual Update

Manually updating this plugin is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/plugins/simple_contact` directory.
* Download the new version of the plugin from either [GetGrav.org](http://getgrav.org/downloads/plugins#extras).
* Unzip the zip file in `your/site/user/plugins` and rename the resulting folder to `simple_contact`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/plugins`) will remain intact.
