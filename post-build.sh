#!/bin/bash

echo 'drulibs.com' > docs/CNAME

head -n 4 docs/index.html > temp.html
cat ga.js >> temp.html
tail -n +5 docs/index.html  >> temp.html
mv temp.html docs/index.html
