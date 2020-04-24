from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def business(request):
    return render(request,'business/businesslogin.html')

def businessSignup(request):
    return render(request,'business/businesssignup.html')
