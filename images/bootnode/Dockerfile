FROM ubuntu:xenial

MAINTAINER A.Kalaydov <akalajdov@mail.ru>

#RUN apt-get update \
#     && apt-get install -y wget software-properties-common \
#     && rm -rf /var/lib/apt/lists/*

WORKDIR "/root"

#RUN add-apt-repository -y ppa:ethereum/ethereum
#RUN apt-get install software-properties-common \
#    && add-apt-repository -y ppa:ethereum/ethereum \
#    && apt-get update \
#    && apt-get install -y ethereum
RUN apt-get update \
    && apt-get install -y software-properties-common \
    && add-apt-repository -y ppa:ethereum/ethereum \
    && apt-get update \
    && apt-get install -y ethereum

ARG binary
#RUN apt-get update \
#     && apt-get install -y ethereum

ENV nodekeyhex=""
ENV ip=""
CMD exec bootnode -nodekeyhex $nodekeyhex --addr $ip

#EXPOSE 30301
#EXPOSE 30303/udp
#EXPOSE 30310
#EXPOSE 30311/udp