#!/bin/bash
bash ./app/wipeHomeWorkData.sh
cp ./HomeWorkData.empty ./HomeWorkData.html
bash ./DOM-CONTENT_SYNC.sh
cat HomeWorkData.html | tree -f
sync | sleep 0.4