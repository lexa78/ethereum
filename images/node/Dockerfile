FROM ubuntu:xenial

MAINTAINER A.Kalaydov <akalajdov@mail.ru>

WORKDIR "/opt"

RUN apt-get update \
    && apt-get install -y software-properties-common \
    && add-apt-repository -y ppa:ethereum/ethereum \
    && apt-get update \
    && apt-get install -y ethereum

ADD ./genesis.json ./genesis.json
RUN geth init genesis.json

ARG password
ARG privatekey
RUN echo $password > ~/.accountpassword && echo $privatekey > ~/.privatekey

RUN geth account import --password ~/.accountpassword  ~/.privatekey

ENV address=""
ENV bootnodeId=""
ENV bootnodeIp=""
#ENV port="30303"
ENV port=""

CMD exec geth --bootnodes "enode://$bootnodeId@$bootnodeIp:30311" --networkid="500" --verbosity=5 --http --http.addr=0.0.0.0 --http.corsdomain=* --allow-insecure-unlock --unlock $address --password ~/.accountpassword --syncmode full --port $port --nat extip:$bootnodeIp

EXPOSE 8545
#EXPOSE 30310
#EXPOSE 30311/udp