# This is a template Dockerfile from kickstart-skel
#
# Edit FROM-Line to actual base image:
FROM infracamp/kickstart-flavor-<flavor-name>

# Provide a container name:
ENV DEV_CONTAINER_NAME="some_name"

ADD / /opt
RUN ["bash", "-c",  "chown -R user /opt"]
RUN ["/kickstart/flavorkit/scripts/start.sh", "build"]

ENTRYPOINT ["/kickstart/flavorkit/scripts/start.sh", "standalone"]