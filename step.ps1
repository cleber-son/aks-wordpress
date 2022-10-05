Connect Az Account

# Login into Azure
az login 

# Create resource azure
az group create --location eastus --name wordpress-RG

# Create the k8s cluster
az aks create --resource-group wordpress-RG --name AKSWordPress --node-count 2 --generate-ssh-keys

# Create ACR -- DO CARA é shivamazr987875
az acr create --resource-group wordpress-RG --name acrwordraizenproject --sku basic

# Create MySQL Server  -- DO CARA é server4500031559
az mysql flexible-server create --location eastus --resource-group wordpress-RG

# Attach ACR woth AKS
az aks get-credentials --resource-group wordpress-RG --name AKSWordPress

az aks update -n AKSWordPress --resource-group wordpress-RG --attach-acr acrwordraizenproject 


# Create the docker image
sudo docker build -f Dockerfile.yaml --tag mybloglive:latest . 

docker images

az acr login -n acrwordraizenproject

sudo docker tag mybloglive:latest acrwordraizenproject.azurecr.io/mybloglive:v1

sudo docker push acrwordraizenproject.azurecr.io/mybloglive:v1


# Deploy the wordpress in the aks
kubectl apply -f mywordpress.yaml

kubectl get service php-svc --watch

az aks check-acr --resource-group wordpress-RG --name AKSWordPress --acr acrwordraizenproject.azurecr.io



















