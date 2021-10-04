FROM ubuntu

MAINTAINER swapnil

RUN apt-get update && apt-get install git -y
RUN git clone https://github.com/swapnil-dot/corona_pandemic.git
WORKDIR /corona_pandemic
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y tzdata
RUN apt-get update && apt-get install software-properties-common -y
RUN apt-add-repository ppa:ondrej/php

RUN apt-get update && apt-get install -y php7.0-mysql
ENTRYPOINT ["/corona_pandemic/php7.0"]
CMD ["php7.0","login.php","0.0.0.0:8080"]
EXPOSE 8080
~                                                                                                                                    
~                                                                                                                                    
~                                                                                                                                    
~                                                                                                                                    
~                         
