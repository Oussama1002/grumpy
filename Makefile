
PWD:=$(PWD)
PROJECT_NAME=claudio_new 
LOCAL_FOLDER=${PWD}/htdocs
LOCAL_FOLDER_ENGINE=${PWD}/engine
IN_PORT_PREFIX=9

IN_PORT_HTTP=${IN_PORT_PREFIX}80
OUT_PORT_HTTP=80
IN_PORT_HTTPS=${IN_PORT_PREFIX}443
OUT_PORT_HTTPS=443
IN_PORT_MYSQL=3309
OUT_PORT_MYSQL=3306


test:
	echo ${PWD}

run:
	docker run -d --name ${PROJECT_NAME} \
		-p ${IN_PORT_HTTP}:${OUT_PORT_HTTP} \
		-p ${IN_PORT_HTTPS}:${OUT_PORT_HTTPS} \
		-p ${IN_PORT_MYSQL}:${OUT_PORT_MYSQL} \
		-v ${PWD}/htdocs:/opt/lampp/htdocs \
		-v ${PWD}/engine:/opt/lampp/engine \
		-v ${PWD}/datas:/opt/lampp/datas \
		-v ${PWD}/mysql:/opt/lampp/var/mysql \
		tomsik68/xampp:8

delete_container:
	docker stop ${PROJECT_NAME}
	docker container rm ${PROJECT_NAME}

rebuild:
	make stop
	make delete_container
	make run

start:
	docker start ${PROJECT_NAME}

stop:
	docker stop ${PROJECT_NAME}

restart:
	make stop
	make start

edit:
	vim -S ${PROJECT_NAME}.vim

shell:
	docker exec -it ${PROJECT_NAME} /bin/bash

browser:
	chromium --temp-profile 0.0.0.0:${IN_PORT_HTTP} &

localnetwork:
	echo "$(shell hostname -I):${IN_PORT_HTTP}"
