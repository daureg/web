#find -name index.php -cmin -60|sed 's/^\.\///'|sed 's/\/index\.php$//'|sed 's/index\.php/\./'
BASE=`pwd`
echo 'lftp -e "' > do_it
for i in ecrits ecrits/feerie ecrits/immor; do # .  about tmp archives common plan projets projets/sitemap2map projets/arma projets/arma/plagiat projets/arma/deadline projets/ogre projets/xfce; do
	cd $i
	php index.php > index.xhtml
	echo "put -O $i $i/index.xhtml && " >> $BASE/do_it
	cd $BASE
done
echo "exit -u u39248933 geraudsoft.info" >> do_it
