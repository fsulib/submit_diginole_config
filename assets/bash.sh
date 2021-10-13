

# Custom bash extensions created by submit_diginole_config vagrant boot 
PATH=/submit_diginole_config/commands/:/var/www/html/drupal/vendor/bin/:$PATH

function git_set {
  if [ "$1" = "bb" ]
  then
    echo "Setting git configurations for Bryan Brown"
    git config --system user.name "Bryan J. Brown"
    git config --system user.email "bjbrown@fsu.edu"
  elif [ "$1" = "ba" ]
  then
    echo "Setting git configurations for Brian Arsenault"
    git config --system user.name "Brian Arsenault"
    git config --system user.email "barsenault@fsu.edu"
  elif [ "$1" = "dr" ]
  then
    echo "Setting git configurations for Dave Rodriguez"
    git config --system user.name "Dave Rodriguez"
    git config --system user.email "drodriguez@fsu.edu"
  elif [ "$1" = "fc" ]
  then
    echo "Setting git configurations for Favenzio Calvo"
    git config --system user.name "Favenzio Calvo"
    git config --system user.email "fcalvo@admin.fsu.edu"
  else
    echo "$1 is not a valid argument\n"
  fi
  git config --list
}
