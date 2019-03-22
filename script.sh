#!/bin/bash
clear
RED='\033[0;31m'
NC='\033[0m' # No Colors

echo "Hello you are about to install JKlerk iTerm2 settings."
echo "Note: This will only install the applications."
echo "You still need to configure settings in iTerm"
echo
echo -n "Proceed? [y/n]: "
read ans

clear

confirm(){
	if [[ $ans = "y" ]]
	then
		echo "Starting installation"
		echo "Checking if iTerm2 is installed..."
	else
		printf "${RED}Exiting...\n"
		exit
	fi
}
confirm



checkiterm(){
	if open -Ra "iTerm.app";
	then
		echo "iTerm exists"
		echo "Installing Oh My Zsh"
		sh -c "$(curl -fsSL https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"
	else
		echo "iTerm does not exist"
		echo "Please install iTerm2 before using this script "
		exit
	fi
}
checkiterm

checkbrew(){
	echo "Checking if Homebrew is installed..."
	sleep 3
	command -v brew >/dev/null 2>&1 || { echo >&2 "You need to install Homebrew first"; exit; }
}
checkbrew

powerline(){
 	echo "Installing powerline fonts"
 	sleep 1
	git clone https://github.com/powerline/fonts.git --depth=1
	cd fonts
	./install.sh
	cd ..
	echo "Removing folder"
	rm -rf fonts
}
powerline

nerdfont(){
	echo "Installing Nerdfont"
	sleep 1
	brew tap caskroom/fonts
	brew cask uninstall font-hack-nerd-font
	brew cask install font-hack-nerd-font
}
nerdfont

power(){
	echo "Installing powerlevel9k"
	sleep 1
	git clone https://github.com/bhilburn/powerlevel9k.git ~/.oh-my-zsh/custom/themes/powerlevel9k
	echo "Setting up settings"
	echo "POWERLEVEL9K_MODE='nerdfont-complete'" >> ~/.zshrc
	echo "POWERLEVEL9K_LEFT_PROMPT_ELEMENTS=(ssh dir vcs newline status)" >> ~/.zshrc
	echo "POWERLEVEL9K_RIGHT_PROMPT_ELEMENTS=()" >> ~/.zshrc
	echo "alias ls='ls -G'" >> ~/.zshrc
	sleep 3
	echo "All settings are finished. Refer to readme.md for post installation"
}
power
















