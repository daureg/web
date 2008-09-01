#find -name index.php -cmin -60|sed 's/^\.\///'|sed 's/\/index\.php$//'|sed 's/index\.php/\./'
BASE=`pwd`
echo 'lftp -e "' > do_it
for i in ecrits ecrits/feerie ecrits/immor style about about/cv tmp archives common plan projets projets/sitemap2map projets/arma projets/arma/plagiat projets/arma/deadline projets/ogre projets/xfce; do
	cd $i
	php index.php > index.html
	echo "mkdir public_html/$i && put -O public_html/$i $i/index.html && " >> $BASE/do_it
	cd $BASE
done
cd common
for i in 404.php standards.php; do
	NAME=`basename $i .php`.html
	php $i > $NAME
	echo "put -O public_html/common common/$NAME && " >> $BASE/do_it
done
cd $BASE
echo 'exit" -u slyxi slyxi.xf-s.com' >> do_it
