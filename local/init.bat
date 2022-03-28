cd ../docker
docker-compose -p learning -f docker-compose.yml -f ../local/docker-compose.yml up -d --build