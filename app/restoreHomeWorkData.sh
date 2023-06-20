#!/bin/bash
cp HomeWorkData.old HomeWorkData.html
cat HomeWorkData.html | tree -f
sync | sleep 0.4