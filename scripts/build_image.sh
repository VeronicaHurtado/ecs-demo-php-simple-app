#!/bin/bash
echo "Creating the image" >> /var/log/kops.log
REPOSITORY_URI=`cat /opt/k8s/ecr.txt`
REPO=$(echo "${REPOSITORY_URI}" |awk -F"/" '{ print $2 }')

echo "$REPOSITORY_URI" >> /var/log/kops.log
$(aws ecr get-login --no-include-email --region ap-southeast-2)
TAG=`date "+%d%H%M%S"`
IMAGE_URI="${REPOSITORY_URI}:${TAG}"
echo "$IMAGE_URI" >> /var/log/kops.log
echo $(grep "background-color" /opt/k8s/codedeploy/scripts/src/index.php) >> /var/log/kops.log
echo "$(which docker)" &>> /var/log/kops.log
echo "$(docker build -t "$REPO" .)" &>> /var/log/kops.log
echo "$(docker tag $REPO "$IMAGE_URI")" &>> /var/log/kops.log
echo "$(docker push "$IMAGE_URI")"  &>> /var/log/kops.log
sleep 20
echo "$(kubectl set image deployment/website1 website1=\"$IMAGE_URI\")" &>> /var/log/kops.log
