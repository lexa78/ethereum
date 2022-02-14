FROM ubuntu:xenial

MAINTAINER A.Kalaydov <akalajdov@mail.ru>

#RUN apt-get update \
#     && apt-get install -y wget \
#     && rm -rf /var/lib/apt/lists/*

WORKDIR "/opt"
#ARG BINARY="geth-alltools-linux-amd64-1.8.1-1e67410e.tar.gz"
#RUN wget "https://gethstore.blob.core.windows.net/builds/$BINARY"
#RUN tar -xzvf $BINARY --strip 1
#RUN rm $BINARY

#RUN apt-get install software-properties-common \
#    && add-apt-repository -y ppa:ethereum/ethereum \
#    && apt-get update \
#    && apt-get install -y ethereum
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
#CMD exec geth --bootnodes "enode://$bootnodeId@$bootnodeIp:$port" --networkid="500" --verbosity=4 --http --http.addr=0.0.0.0 --http.corsdomain=* --allow-insecure-unlock --mine --miner.etherbase $address --unlock $address --password ~/.accountpassword
CMD exec geth --bootnodes "enode://$bootnodeId@$bootnodeIp:30311" --networkid="500" --verbosity=5 --mine --miner.threads=2 --miner.etherbase $address --unlock $address --password ~/.accountpassword --syncmode full --port $port --nat extip:$bootnodeIp

#EXPOSE 8545
#EXPOSE 30310
#EXPOSE 30311/udp