FROM nginx:1.23
RUN apt update
RUN apt install nginx
RUN systemctl start nginx
RUN apt install software-properties-common -y
RUN add-apt-repository ppa:ondrej/php
RUN apt install php7.4-fpm php7.4-bcmath php7.4-curl php7.4-gd php7.4-mbstring php7.4-mysql php7.4-xml php7.4-zip -y
#RUN echo /etc/nginx/sites-available/default
#COPY default /etc/nginx/sites-available/default
CMD ["nginx"]

