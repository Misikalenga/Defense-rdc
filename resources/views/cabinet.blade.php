<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cabinet - Ministère Délégué Défense RDC</title>

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
</head>
<body class="bg-cream text-ink antialiased">

@include('partials.header')

<!-- HERO -->
<section class="bg-ink text-white py-14 md:py-20 relative overflow-hidden min-h-[340px]">
    <div class="absolute inset-0 bg-rdcBlue/10"></div>
    <div class="absolute -right-20 -top-20 w-96 h-96 bg-rdcBlue/20 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-10">
        <p class="text-rdcGold font-bold uppercase tracking-widest text-xs mb-3">Le Ministère</p>
        <h1 class="text-3xl md:5xl font-extrabold mb-6">Le Cabinet du Ministre</h1>
        <p class="text-white/70 max-w-2xl leading-relaxed text-lg">
            Découvrez l’équipe dirigeante qui œuvre pour la défense nationale et la reconnaissance des anciens combattants.
        </p>
    </div>
</section>

<main class="max-w-7xl mx-auto px-4 lg:px-6 py-12">

    <!-- MINISTRE -->
    @if($minister)
        <section id="section-ministre" class="mb-16">
            <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-8">
                <span class="w-2 h-8 bg-rdcBlue block"></span> Le Ministre
            </h2>
            <div class="md:grid md:grid-cols-3 md:gap-8 bg-white border border-black/10 shadow-soft p-6">
                <div class="md:col-span-1 mb-6 md:mb-0">
                    <img src="{{ $minister->photo_path ? Storage::url($minister->photo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($minister->name) . '&color=FFFFFF&background=0B1220' }}" 
                         alt="Photo de {{ $minister->name }}" 
                         class="w-full h-auto object-cover rounded shadow-md">
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold">{{ $minister->name }}</h3>
                    <p class="text-rdcBlue font-semibold text-lg mb-4">{{ $minister->official_function }}</p>
                    <div class="prose max-w-none text-black/80 leading-relaxed">
                        <p>
                            {{ Illuminate\Support\Str::of($minister->biography)->stripTags()->limit(400) }}
                            <a href="{{ route('cabinet.show', $minister) }}" class="text-rdcBlue hover:underline font-semibold">Lire la suite</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- AUTRES MEMBRES DU CABINET -->
    <section id="section-cabinet">
        <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-8">
            <span class="w-2 h-8 bg-rdcRed block"></span> Membres du Cabinet
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($otherMembers as $member)
                <div class="bg-white border border-black/10 shadow-soft rounded-lg overflow-hidden flex flex-col">
                    <img src="{{ $member->photo_path ? Storage::url($member->photo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($member->name) . '&color=FFFFFF&background=444444' }}" 
                         alt="Photo de {{ $member->name }}" 
                         class="w-full h-56 object-cover">
                    <div class="p-5 flex-grow">
                        <h4 class="font-bold text-lg">{{ $member->name }}</h4>
                        <p class="text-black/60 text-sm mb-3">{{ $member->official_function }}</p>
                        
                        @if($member->biography)
                        <a href="{{ route('cabinet.show', $member) }}" class="text-sm text-rdcBlue hover:underline font-semibold">
                            Lire la biographie
                        </a>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 bg-white border border-black/10 shadow-soft rounded-lg">
                    <p class="text-gray-500">Les membres du cabinet seront affichés ici prochainement.</p>
                </div>
            @endforelse
        </div>
    </section>

</main>

@include('partials.footer')

</body>
</html>

