#!/usr/bin/env bash

DIR=/vagrant

if [[ $(whoami) != "vagrant" ]]
then
		echo "Please run this script from inside your vagrant box."
		exit
fi

bold=$(tput bold)
normal=$(tput sgr0)

if [ -e $DIR/htdocs/styleguide/pattern-lab ]
then
		echo "${bold}Directory $DIR/htdocs/styleguide/pattern-lab already exists. Please remove it before running this script:${normal}"
		echo
		exit
fi

cd $DIR/htdocs/styleguide

echo "${bold}Installing pattern lab${normal}"
echo "${bold}When prompted for suggested starterkit choose 1: pattern-lab/starterkit-twig-base.${normal}"

composer create-project pattern-lab/edition-twig-standard pattern-lab

sed -i "s/publicDir:.*/publicDir: ..\/styleguide\/public/g" $DIR/htdocs/styleguide/pattern-lab/config/config.yml
sed -i "s/sourceDir:.*/sourceDir: ..\/styleguide\/source/g" $DIR/htdocs/styleguide/pattern-lab/config/config.yml

cd $DIR/htdocs/styleguide/pattern-lab

composer install


