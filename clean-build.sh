#!/bin/bash
rm -rf ./dist
./build.sh

# npx browser-sync dist -w