from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse
from django.shortcuts import render
from django.views.generic import TemplateView
from .scripts.deploy import deploy

# Create your views here.
class HomePageView(TemplateView):
    def get(self, request, **kwargs):
        return render(request, 'hello/index.html', context=None)

def submit(request):
    info=str(request.POST['namespace']).lower()
    count=str(request.POST['count'])

    deploy(info,count)

    return render(request,  'hello/new.html',{"result":"deployed successfully"})   # do something with info