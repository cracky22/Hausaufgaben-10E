#!/bin/bash
bash ./app/clearHomeWorkData.sh
cp HomeWorkData.html HomeWorkData.old
cp ./HomeWorkData.empty ./HomeWorkData.html
bash ./DOM-CONTENT_SYNC.sh
cat HomeWorkData.html | tree -f
sync | sleep 0.2