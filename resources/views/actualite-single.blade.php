<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $actualite->title }} - Ministère Délégué Défense RDC</title>

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

    <!-- HEADER -->
    @include('partials.header')

    <main class="min-h-screen">
        <article class="max-w-4xl mx-auto px-4 lg:px-6 py-12">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-6">{{ $actualite->title }}</h1>
            <div class="flex items-center mb-6 text-sm text-black/60">
                <span>Publié le {{ $actualite->published_at->format('d M Y') }}</span>
                <span class="mx-2">•</span>
                <span>{{ $actualite->categorie->name ?? 'N/A' }}</span>
            </div>
            <img src="{{ (\Illuminate\Support\Str::startsWith($actualite->image, ['http://','https://']) ? $actualite->image : asset('storage/' . $actualite->image)) }}" alt="{{ $actualite->title }}" class="w-full h-auto object-cover rounded-lg mb-8">
            <div class="prose max-w-none">
                {!! $actualite->content !!}
            </div>
        </article>
    </main>

    @include('partials.footer')

</body>

</html>
