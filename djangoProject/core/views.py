from django.shortcuts import render

# Create your views here.
from core.models import Tovar, KategoriaTovara, KategoriaUslug


def render_glavnoi(request):
    kategorii_tovarov = KategoriaTovara.objects.all()

    kategorii_uslug = KategoriaUslug.objects.all()
    return render(
        request,
        'core/glavnaia.html',
        context={
            'kategorii_tovarov':kategorii_tovarov,
            'kategorii_uslug':kategorii_uslug
        },
    )

def render_katalog(request):
    kategorii_tovarov = KategoriaTovara.objects.all()

    return render(
        request,
        'core/katalog.html',
        context={
            'kategorii_tovarov':kategorii_tovarov,
        },
    )

def render_uslugi(request):
    kategorii_uslug = KategoriaUslug.objects.all()

    return render(
        request,
        'core/uslugi.html',
        context={
            'kategorii_uslug':kategorii_uslug,
        },
    )

def render_calc(request):
    return render(
        request,
        'core/calc.html',
    )