# submit_diginole_config
Configuration and dev VM for submit.diginole.lib.fsu.edu

## Vagrant VM
In order to create a local Vagrant virtual machine, `git clone` this repository
to your local machine, `cd` into it, and then run `vagrant up`. The username and 
password for the Drupal site created by the VM are both 'admin'. SSH into the VM
with `vagrant ssh`.

Once inside the machine, switch to root via `sudo su` in order to make use of 
custom commands to aid development.

The Vagrant sync directory for this VM has been set to `/submit_diginole_config`
inside the VM. Note that since this is a synched directory and not a repo clone,
changes made to the repo from the host machine will be immediately applicable to 
the resulting VM without the need to push to GitHub, so you don't have to push 
changes in order to test them. You may test them immediately, and only push them
if the new code is successful.

### `git-set`
A `git-set` command has been added to the root user's `.bashrc` in order to
facilitate git usage. Use the initials of your first and last name as an 
argument to `git-set` in order to globally configure git for your usage.

### `sd-export`
The command `sd-export` has been configured to be globally available to the
root user. Entering this command initiates the export of the Drupal site's 
configuration to the sync directory, `/submit_diginole_config/sync`. Once
configuration has been exported, you will need to push it to GitHub manually.

### `sd-import`
The command `sd-import` has been configured to be globally available to the
root user. Entering this command initiates the import of the Drupal site's 
configuration from the sync directory, `/submit_diginole_config/sync`.
