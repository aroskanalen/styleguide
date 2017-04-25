#!/usr/bin/env bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

bold=$(tput bold)
normal=$(tput sgr0)

if [ -e $DIR/../pattern-lab ]
then
		echo "${bold}Directory $DIR/../pattern-lab already exists. Please remove it before running this script:${normal}"
		echo
		exit
fi

cd $DIR/..

echo "${bold}Installing pattern lab${normal}"
echo "${bold}When prompted for suggested starterkit choose 1: pattern-lab/starterkit-twig-base.${normal}"

composer create-project pattern-lab/edition-twig-standard pattern-lab

cp -r pattern-lab/public public

sed -i "s/publicDir:.*/publicDir: ..\/public/g" pattern-lab/config/config.yml
sed -i "s/sourceDir:.*/sourceDir: ..\/source/g" pattern-lab/config/config.yml

cd pattern-lab

composer install

php core/console --generate
