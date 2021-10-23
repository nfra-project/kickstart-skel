# Template file from [kickstart-skel](.kicker/KICKSTART_README.md)

FROM nfra/kickstart-flavor-php:8.0

ADD / /opt
RUN ["bash", "-c",  "chown -R user /opt"]
RUN ["/kickstart/run/entrypoint.sh", "build"]

ENTRYPOINT ["/kickstart/run/entrypoint.sh", "standalone"]
