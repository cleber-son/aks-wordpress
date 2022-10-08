Connect Az Account

# Login into Azure 
az login 

# Create resource azure
az group create --location eastus --name wordpress-RG

# Create the k8s cluster
az aks create --resource-group wordpress-RG --name AKSWordPress --node-count 2 --generate-ssh-keys

# Create ACR 
az acr create --resource-group wordpress-RG --name acrwordraizenproject --sku basic

# Create MySQL Server  
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

teste 

Ismalia 

# Deploy the wordpress in the aks
kubectl apply -f mywordpress.yaml

kubectl get service php-svc --watch

az aks check-acr --resource-group wordpress-RG --name AKSWordPress --acr acrwordraizenproject.azurecr.io

az aks show --resource-group wordpress-RG \
    --name AKSWordPress \
    --query servicePrincipalProfile.clientId \
    --output tsv

    az aks check-acr --resource-group wordpress-RG --name AKSWordPress --acr acrwordraizenproject.azurecr.io

    az role assignment list --scope /subscriptions/f8c7fc4f-2a8d-4162-944b-0b26de3993e5/resourceGroups/wordpress-RG/providers/Microsoft.ContainerRegistry/registries/AKSWordPress -o table

    az role assignment list --scope /subscriptions/f8c7fc4f-2a8d-4162-944b-0b26de3993e5/resourceGroups/wordpress-RG/providers/Microsoft.ContainerRegistry/registries/acrwordraizenproject -o table

    az aks show --resource-group wordpress-RG \
    --name AKSWordPress \
    --query servicePrincipalProfile.clientId \
    --output tsv



  
DEPOIS
FROM wordpress:4.9.1-apache

COPY html /var/www/html

RUN chown -R www-data:www-data /var/www/html/

ENTRYPOINT ["apache2-foreground"]

ANTES 
FROM php:7.2-apache
COPY public/ /var/www/html/

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

















