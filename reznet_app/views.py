from django.shortcuts import render
from .forms import serviceform

# Create your views here.
def home(request):
    return render(request,'reznet_app/index.html')

def orders(request):
    newform = serviceform();
    return render(request, 'reznet_app/order.html',{'serviceform' : serviceform})

def services(request):
    return render(request, 'reznet_app/services.html')