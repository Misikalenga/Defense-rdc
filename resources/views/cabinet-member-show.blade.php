<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $member->name }} - Cabinet</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rdcBlue: "#0073CF",
                        rdcRed: "#CE1126",
                        rdcGold: "#FCD116",
                        cream: "#F7F3E8",
                        cream2: "#FBF8F0",
                        ink: "#0B1220"
                    },
                    boxShadow: {
                        soft: "0 8px 20px rgba(11,18,32,0.08)"
                    }
                }
            }
        }
    </script>
    @vite('resources/css/typography_override.css')
</head>
<body class="bg-cream2 text-ink antialiased">

@include('partials.header')

<!-- HERO -->
<section class="bg-ink text-white py-14 md:py-20 relative overflow-hidden min-h-[340px]">
    <div class="absolute inset-0 bg-rdcBlue/10"></div>
    <div class="absolute -right-20 -top-20 w-96 h-96 bg-rdcBlue/20 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-10">
        <div class="mb-4">
            <a href="{{ route('cabinet') }}" class="text-rdcGold font-semibold uppercase tracking-widest text-xs hover:underline">< Retour au Cabinet</a>
        </div>
        <h1 class="text-3xl md:5xl font-extrabold mb-2">{{ $member->name }}</h1>
        <p class="text-white/70 max-w-2xl leading-relaxed text-lg">
            {{ $member->official_function }}
        </p>
    </div>
</section>

<main class="max-w-4xl mx-auto px-4 lg:px-6 py-12">
    <div class="bg-white border border-black/10 shadow-soft p-6 md:p-8">
        <div class="md:grid md:grid-cols-3 md:gap-8">
            <div class="md:col-span-1 mb-6 md:mb-0">
                <img src="{{ $member->photo_path ? Storage::url($member->photo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($member->name) . '&color=FFFFFF&background=0B1220&size=256' }}" 
                     alt="Photo de {{ $member->name }}" 
                     class="w-full h-auto object-cover rounded shadow-md">
            </div>
            <div class="md:col-span-2">
                 <h2 class="text-2xl font-bold mb-4">Biographie</h2>
                <div class="prose max-w-none text-black/80 leading-relaxed">
                    {!! $member->biography !!}
                </div>
            </div>
        </div>
    </div>
</main>

@include('partials.footer')

</body>
</html>
