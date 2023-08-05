#!/bin/bash
cp HomeWorkData.html HomeWorkData.old
cp ./HomeWorkData.empty ./HomeWorkData.html
cat HomeWorkData.html
sync | sleep 0.2