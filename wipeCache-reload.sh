#!/bin/bash
bash ./app/wipeCache-reload.sh
sync
sleep 1
tree -f
cat *
ls -la *
bash ./DOM-CONTENT_SYNC.sh