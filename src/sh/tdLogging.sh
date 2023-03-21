#!/bin/bash
date=`date +%F`
time=`date +%T`
logfile=../.logs/log-$date.log

echo access cOS-HW @ $time >> $logfile