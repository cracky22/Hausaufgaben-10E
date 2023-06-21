#!/bin/bash
ls -la
tree -f | cat *.html
bash ./DOM-CONTENT_SYNC.sh
bash ./app/DOM-CONTENT_SYNC.sh
cp ./HomeWorkData.html ../HomeWorkData.html
sync && sleep 1