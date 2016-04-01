sudo chmod 777 -R ./app/cache/ app/logs
./app/console cache:clear --no-warmup --env=dev
./app/console cache:clear --no-warmup --env=prod
sh ./cmd/permisos.sh
sh ./cmd/install_web_symbolic.sh
