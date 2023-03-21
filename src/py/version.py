#!/usr/bin/python3
cOS_homework = [
    {
    "name": "com.crackyOS.homework",
    "version-file": "./version",
    "frameworks": "crackyOS -web --contentUI",
    "run-sys": "ubuntu, debian, arch, fedora, apache2",
    "developer": "Martin Blieninger",
    "nickname": "cracky>"
     }
]
content_type = "json"
counter_information_table = 0
for informations in cOS_homework:
    print(informations)
    counter_information_table += 1
pass