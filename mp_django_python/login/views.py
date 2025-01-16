from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def login_EN(request):
    return render(request, 'log_in_EN.html')

def login_FR(request):
    return render(request, 'log_in_FR.html')

def privacy_policy(request):
    return render(request, 'privacy_policy.html')

def terms(request):
    return render(request, 'terms_of_use.html')

def confidentialité(request):
    return render(request, 'politique_de_confidentialite.html')

def conditions(request):
    return render(request, 'conditions_utilisation.html')