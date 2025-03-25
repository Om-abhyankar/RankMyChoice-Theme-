"use client"

import { useState, useEffect } from "react"
import Link from "next/link"
import Image from "next/image"
import Head from "next/head"
import { Search, Menu, X, ChevronDown, Facebook, Twitter, Instagram, Youtube, Rss } from "lucide-react"
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/components/ui/tabs"

export default function ThemePreview() {
  const [isMenuOpen, setIsMenuOpen] = useState(false)
  const [mounted, setMounted] = useState(false)

  // Prevent hydration mismatch
  useEffect(() => {
    setMounted(true)
  }, [])

  if (!mounted) {
    return null
  }

  return (
    <>
      <Head>
        <title>RankMyChoice.com - Reviews, Rankings, and Insights</title>
        <meta
          name="description"
          content="RankMyChoice.com provides rankings, reviews, and insights on cars, movies, anime, travel destinations, and more."
        />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="index, follow" />
        <meta property="og:title" content="RankMyChoice.com - Reviews, Rankings, and Insights" />
        <meta
          property="og:description"
          content="Your go-to source for rankings and reviews on everything from cars to movies, anime to travel destinations."
        />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://rankmychoice.com" />
        <meta property="og:image" content="https://rankmychoice.com/og-image.jpg" />
        <link rel="canonical" href="https://rankmychoice.com" />
      </Head>

      <div className="min-h-screen flex flex-col bg-background">
        {/* Header */}
        <header className="border-b sticky top-0 z-50 bg-background">
          {/* Top Bar */}
          <div className="bg-primary text-primary-foreground py-2">
            <div className="container flex justify-between items-center">
              <div className="text-sm flex items-center gap-4">
                <span>Trending:</span>
                <Link href="#" className="hover:underline">
                  Top 10 Anime of 2024
                </Link>
                <Link href="#" className="hover:underline hidden md:inline">
                  New Electric Cars Review
                </Link>
                <Link href="#" className="hover:underline hidden lg:inline">
                  Latest Movie Releases
                </Link>
              </div>
              <div className="flex items-center gap-3">
                <Link href="#" aria-label="Follow us on Facebook">
                  <Facebook size={16} />
                </Link>
                <Link href="#" aria-label="Follow us on Twitter">
                  <Twitter size={16} />
                </Link>
                <Link href="#" aria-label="Follow us on Instagram">
                  <Instagram size={16} />
                </Link>
                <Link href="#" aria-label="Subscribe to our YouTube channel">
                  <Youtube size={16} />
                </Link>
                <Link href="#" aria-label="Subscribe to our RSS feed">
                  <Rss size={16} />
                </Link>
              </div>
            </div>
          </div>

          {/* Main Header */}
          <div className="container py-4">
            <div className="flex justify-between items-center">
              <Link href="/" className="text-2xl md:text-3xl font-bold">
                RankMyChoice<span className="text-primary">.com</span>
              </Link>

              <div className="hidden md:flex items-center gap-4">
                <div className="relative w-64">
                  <Input type="search" placeholder="Search..." className="pr-8" aria-label="Search website" />
                  <Search
                    className="absolute right-2 top-1/2 transform -translate-y-1/2 h-4 w-4 text-muted-foreground"
                    aria-hidden="true"
                  />
                </div>
                <Button variant="outline">Subscribe</Button>
              </div>

              <Button
                variant="ghost"
                size="icon"
                className="md:hidden"
                onClick={() => setIsMenuOpen(!isMenuOpen)}
                aria-expanded={isMenuOpen}
                aria-label="Toggle menu"
              >
                {isMenuOpen ? <X aria-hidden="true" /> : <Menu aria-hidden="true" />}
              </Button>
            </div>
          </div>

          {/* Navigation */}
          <nav className="border-t hidden md:block" aria-label="Main navigation">
            <div className="container">
              <ul className="flex gap-1">
                <li>
                  <Link href="/" className="inline-flex px-4 py-3 font-medium hover:text-primary">
                    Home
                  </Link>
                </li>
                <li className="group relative">
                  <button
                    className="inline-flex items-center px-4 py-3 font-medium hover:text-primary"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    Automotive <ChevronDown className="ml-1 h-4 w-4" aria-hidden="true" />
                  </button>
                  <div
                    className="absolute left-0 top-full z-10 hidden w-48 bg-background border rounded-md shadow-md group-hover:block"
                    role="menu"
                  >
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Cars
                    </Link>
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Motorcycles
                    </Link>
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Reviews
                    </Link>
                  </div>
                </li>
                <li className="group relative">
                  <button
                    className="inline-flex items-center px-4 py-3 font-medium hover:text-primary"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    Entertainment <ChevronDown className="ml-1 h-4 w-4" aria-hidden="true" />
                  </button>
                  <div
                    className="absolute left-0 top-full z-10 hidden w-48 bg-background border rounded-md shadow-md group-hover:block"
                    role="menu"
                  >
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Movies
                    </Link>
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      TV Shows
                    </Link>
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Anime
                    </Link>
                  </div>
                </li>
                <li className="group relative">
                  <button
                    className="inline-flex items-center px-4 py-3 font-medium hover:text-primary"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    Technology <ChevronDown className="ml-1 h-4 w-4" aria-hidden="true" />
                  </button>
                  <div
                    className="absolute left-0 top-full z-10 hidden w-48 bg-background border rounded-md shadow-md group-hover:block"
                    role="menu"
                  >
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Gadgets
                    </Link>
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Software
                    </Link>
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Reviews
                    </Link>
                  </div>
                </li>
                <li className="group relative">
                  <button
                    className="inline-flex items-center px-4 py-3 font-medium hover:text-primary"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    Travel <ChevronDown className="ml-1 h-4 w-4" aria-hidden="true" />
                  </button>
                  <div
                    className="absolute left-0 top-full z-10 hidden w-48 bg-background border rounded-md shadow-md group-hover:block"
                    role="menu"
                  >
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Destinations
                    </Link>
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Airlines
                    </Link>
                    <Link href="#" className="block px-4 py-2 hover:bg-muted" role="menuitem">
                      Travel Tips
                    </Link>
                  </div>
                </li>
                <li>
                  <Link href="#" className="inline-flex px-4 py-3 font-medium hover:text-primary">
                    About
                  </Link>
                </li>
                <li>
                  <Link href="#" className="inline-flex px-4 py-3 font-medium hover:text-primary">
                    Contact
                  </Link>
                </li>
              </ul>
            </div>
          </nav>

          {/* Mobile Menu */}
          {isMenuOpen && (
            <div className="md:hidden border-t" role="navigation" aria-label="Mobile navigation">
              <div className="container py-4">
                <div className="mb-4">
                  <Input type="search" placeholder="Search..." className="w-full" aria-label="Search website" />
                </div>

                <ul className="space-y-2">
                  <li>
                    <Link href="/" className="block py-2 font-medium">
                      Home
                    </Link>
                  </li>
                  <li>
                    <details className="group">
                      <summary className="flex cursor-pointer items-center justify-between py-2 font-medium list-none">
                        Automotive
                        <ChevronDown className="h-4 w-4" aria-hidden="true" />
                      </summary>
                      <ul className="ml-4 mt-2 space-y-2">
                        <li>
                          <Link href="#" className="block py-1">
                            Cars
                          </Link>
                        </li>
                        <li>
                          <Link href="#" className="block py-1">
                            Motorcycles
                          </Link>
                        </li>
                        <li>
                          <Link href="#" className="block py-1">
                            Reviews
                          </Link>
                        </li>
                      </ul>
                    </details>
                  </li>
                  <li>
                    <details className="group">
                      <summary className="flex cursor-pointer items-center justify-between py-2 font-medium list-none">
                        Entertainment
                        <ChevronDown className="h-4 w-4" aria-hidden="true" />
                      </summary>
                      <ul className="ml-4 mt-2 space-y-2">
                        <li>
                          <Link href="#" className="block py-1">
                            Movies
                          </Link>
                        </li>
                        <li>
                          <Link href="#" className="block py-1">
                            TV Shows
                          </Link>
                        </li>
                        <li>
                          <Link href="#" className="block py-1">
                            Anime
                          </Link>
                        </li>
                      </ul>
                    </details>
                  </li>
                  <li>
                    <details className="group">
                      <summary className="flex cursor-pointer items-center justify-between py-2 font-medium list-none">
                        Technology
                        <ChevronDown className="h-4 w-4" aria-hidden="true" />
                      </summary>
                      <ul className="ml-4 mt-2 space-y-2">
                        <li>
                          <Link href="#" className="block py-1">
                            Gadgets
                          </Link>
                        </li>
                        <li>
                          <Link href="#" className="block py-1">
                            Software
                          </Link>
                        </li>
                        <li>
                          <Link href="#" className="block py-1">
                            Reviews
                          </Link>
                        </li>
                      </ul>
                    </details>
                  </li>
                  <li>
                    <details className="group">
                      <summary className="flex cursor-pointer items-center justify-between py-2 font-medium list-none">
                        Travel
                        <ChevronDown className="h-4 w-4" aria-hidden="true" />
                      </summary>
                      <ul className="ml-4 mt-2 space-y-2">
                        <li>
                          <Link href="#" className="block py-1">
                            Destinations
                          </Link>
                        </li>
                        <li>
                          <Link href="#" className="block py-1">
                            Airlines
                          </Link>
                        </li>
                        <li>
                          <Link href="#" className="block py-1">
                            Travel Tips
                          </Link>
                        </li>
                      </ul>
                    </details>
                  </li>
                  <li>
                    <Link href="#" className="block py-2 font-medium">
                      About
                    </Link>
                  </li>
                  <li>
                    <Link href="#" className="block py-2 font-medium">
                      Contact
                    </Link>
                  </li>
                </ul>

                <div className="mt-4 pt-4 border-t">
                  <Button className="w-full">Subscribe</Button>
                </div>
              </div>
            </div>
          )}
        </header>

        <main className="flex-1">
          {/* Hero Section */}
          <section className="py-6 md:py-10 container" aria-label="Featured posts">
            <div className="grid grid-cols-1 lg:grid-cols-3 gap-6">
              <div className="lg:col-span-2 relative group overflow-hidden rounded-lg">
                <Link href="#" className="block">
                  <div className="relative aspect-[16/9]">
                    <Image
                      src="/placeholder.svg?height=600&width=1000"
                      alt="Top 10 Electric Cars of 2024 - Featured image showing modern electric vehicles"
                      fill
                      className="object-cover transition-transform duration-300 group-hover:scale-105"
                      priority
                    />
                  </div>
                  <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                    <div className="absolute bottom-0 p-4 md:p-6">
                      <span className="inline-block px-2 py-1 text-xs font-medium bg-primary text-primary-foreground rounded mb-2">
                        Automotive
                      </span>
                      <h2 className="text-xl md:text-2xl lg:text-3xl font-bold text-white mb-2">
                        Top 10 Electric Cars of 2024: The Future is Now
                      </h2>
                      <p className="text-white/80 line-clamp-2">
                        We've tested and ranked the best electric vehicles on the market. Find out which one tops our
                        list this year.
                      </p>
                    </div>
                  </div>
                </Link>
              </div>

              <div className="space-y-6">
                <div className="relative group overflow-hidden rounded-lg">
                  <Link href="#" className="block">
                    <div className="relative aspect-video">
                      <Image
                        src="/placeholder.svg?height=300&width=500"
                        alt="Summer Anime Preview - Collage of upcoming anime releases"
                        fill
                        className="object-cover transition-transform duration-300 group-hover:scale-105"
                      />
                    </div>
                    <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                      <div className="absolute bottom-0 p-4">
                        <span className="inline-block px-2 py-1 text-xs font-medium bg-primary text-primary-foreground rounded mb-2">
                          Anime
                        </span>
                        <h3 className="text-lg font-bold text-white">Summer 2024 Anime Preview: What to Watch</h3>
                      </div>
                    </div>
                  </Link>
                </div>

                <div className="relative group overflow-hidden rounded-lg">
                  <Link href="#" className="block">
                    <div className="relative aspect-video">
                      <Image
                        src="/placeholder.svg?height=300&width=500"
                        alt="Travel Destinations - Scenic view of a hidden travel location"
                        fill
                        className="object-cover transition-transform duration-300 group-hover:scale-105"
                      />
                    </div>
                    <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                      <div className="absolute bottom-0 p-4">
                        <span className="inline-block px-2 py-1 text-xs font-medium bg-primary text-primary-foreground rounded mb-2">
                          Travel
                        </span>
                        <h3 className="text-lg font-bold text-white">5 Hidden Gems for Your Next Vacation</h3>
                      </div>
                    </div>
                  </Link>
                </div>
              </div>
            </div>
          </section>

          {/* Featured Categories */}
          <section className="py-8 bg-muted/50" aria-label="Categories">
            <div className="container">
              <div className="flex items-center justify-between mb-6">
                <h2 className="text-2xl font-bold">Featured Categories</h2>
                <div className="flex gap-2">
                  <Button variant="outline" size="sm" aria-label="Previous categories">
                    <ChevronDown className="h-4 w-4 rotate-90" aria-hidden="true" />
                  </Button>
                  <Button variant="outline" size="sm" aria-label="Next categories">
                    <ChevronDown className="h-4 w-4 -rotate-90" aria-hidden="true" />
                  </Button>
                </div>
              </div>

              <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
                <Link href="#" className="group">
                  <div className="relative aspect-square overflow-hidden rounded-lg">
                    <Image
                      src="/placeholder.svg?height=300&width=300"
                      alt="Automotive category - Modern car on display"
                      fill
                      className="object-cover transition-transform duration-300 group-hover:scale-105"
                    />
                    <div className="absolute inset-0 bg-black/40 flex items-center justify-center">
                      <h3 className="text-white text-xl font-bold">Automotive</h3>
                    </div>
                  </div>
                </Link>

                <Link href="#" className="group">
                  <div className="relative aspect-square overflow-hidden rounded-lg">
                    <Image
                      src="/placeholder.svg?height=300&width=300"
                      alt="Movies category - Film reel and popcorn"
                      fill
                      className="object-cover transition-transform duration-300 group-hover:scale-105"
                    />
                    <div className="absolute inset-0 bg-black/40 flex items-center justify-center">
                      <h3 className="text-white text-xl font-bold">Movies</h3>
                    </div>
                  </div>
                </Link>

                <Link href="#" className="group">
                  <div className="relative aspect-square overflow-hidden rounded-lg">
                    <Image
                      src="/placeholder.svg?height=300&width=300"
                      alt="Anime category - Colorful anime characters"
                      fill
                      className="object-cover transition-transform duration-300 group-hover:scale-105"
                    />
                    <div className="absolute inset-0 bg-black/40 flex items-center justify-center">
                      <h3 className="text-white text-xl font-bold">Anime</h3>
                    </div>
                  </div>
                </Link>

                <Link href="#" className="group">
                  <div className="relative aspect-square overflow-hidden rounded-lg">
                    <Image
                      src="/placeholder.svg?height=300&width=300"
                      alt="Travel category - Beautiful landscape with mountains and lake"
                      fill
                      className="object-cover transition-transform duration-300 group-hover:scale-105"
                    />
                    <div className="absolute inset-0 bg-black/40 flex items-center justify-center">
                      <h3 className="text-white text-xl font-bold">Travel</h3>
                    </div>
                  </div>
                </Link>
              </div>
            </div>
          </section>

          {/* Latest Posts */}
          <section className="py-10 container" aria-label="Latest blog posts">
            <div className="flex flex-col md:flex-row gap-8">
              {/* Main Content */}
              <div className="flex-1">
                <h2 className="text-2xl font-bold mb-6">Latest Posts</h2>

                <div className="space-y-8">
                  {/* Post Item */}
                  <article
                    className="flex flex-col md:flex-row gap-6"
                    itemScope
                    itemType="https://schema.org/BlogPosting"
                  >
                    <div className="md:w-1/3">
                      <Link href="#" className="block relative aspect-video overflow-hidden rounded-lg group">
                        <Image
                          src="/placeholder.svg?height=200&width=350"
                          alt="Ferrari hybrid supercar on a test track"
                          fill
                          className="object-cover transition-transform duration-300 group-hover:scale-105"
                          itemProp="image"
                        />
                      </Link>
                    </div>
                    <div className="md:w-2/3">
                      <div className="flex items-center gap-3 text-sm text-muted-foreground mb-2">
                        <span itemProp="articleSection">Automotive</span>
                        <span>•</span>
                        <time dateTime="2024-06-15" itemProp="datePublished">
                          June 15, 2024
                        </time>
                      </div>
                      <h3 className="text-xl font-bold mb-2" itemProp="headline">
                        <Link href="#" className="hover:text-primary">
                          The New Ferrari Hybrid: A Perfect Blend of Power and Efficiency
                        </Link>
                      </h3>
                      <p className="text-muted-foreground mb-3 line-clamp-2" itemProp="description">
                        Ferrari's latest hybrid supercar combines raw power with surprising efficiency. We take it for a
                        test drive and share our impressions.
                      </p>
                      <Link href="#" className="text-primary font-medium hover:underline">
                        Read More
                      </Link>
                      <meta itemProp="author" content="RankMyChoice Team" />
                    </div>
                  </article>

                  {/* Post Item */}
                  <article
                    className="flex flex-col md:flex-row gap-6"
                    itemScope
                    itemType="https://schema.org/BlogPosting"
                  >
                    <div className="md:w-1/3">
                      <Link href="#" className="block relative aspect-video overflow-hidden rounded-lg group">
                        <Image
                          src="/placeholder.svg?height=200&width=350"
                          alt="Movie theater with summer blockbuster posters"
                          fill
                          className="object-cover transition-transform duration-300 group-hover:scale-105"
                          itemProp="image"
                        />
                      </Link>
                    </div>
                    <div className="md:w-2/3">
                      <div className="flex items-center gap-3 text-sm text-muted-foreground mb-2">
                        <span itemProp="articleSection">Movies</span>
                        <span>•</span>
                        <time dateTime="2024-06-12" itemProp="datePublished">
                          June 12, 2024
                        </time>
                      </div>
                      <h3 className="text-xl font-bold mb-2" itemProp="headline">
                        <Link href="#" className="hover:text-primary">
                          Summer Blockbusters: What's Worth Watching in Theaters
                        </Link>
                      </h3>
                      <p className="text-muted-foreground mb-3 line-clamp-2" itemProp="description">
                        With so many big releases hitting theaters this summer, we break down which films are worth your
                        time and money.
                      </p>
                      <Link href="#" className="text-primary font-medium hover:underline">
                        Read More
                      </Link>
                      <meta itemProp="author" content="RankMyChoice Team" />
                    </div>
                  </article>

                  {/* Post Item */}
                  <article
                    className="flex flex-col md:flex-row gap-6"
                    itemScope
                    itemType="https://schema.org/BlogPosting"
                  >
                    <div className="md:w-1/3">
                      <Link href="#" className="block relative aspect-video overflow-hidden rounded-lg group">
                        <Image
                          src="/placeholder.svg?height=200&width=350"
                          alt="Attack on Titan anime final season key visual"
                          fill
                          className="object-cover transition-transform duration-300 group-hover:scale-105"
                          itemProp="image"
                        />
                      </Link>
                    </div>
                    <div className="md:w-2/3">
                      <div className="flex items-center gap-3 text-sm text-muted-foreground mb-2">
                        <span itemProp="articleSection">Anime</span>
                        <span>•</span>
                        <time dateTime="2024-06-10" itemProp="datePublished">
                          June 10, 2024
                        </time>
                      </div>
                      <h3 className="text-xl font-bold mb-2" itemProp="headline">
                        <Link href="#" className="hover:text-primary">
                          Attack on Titan Final Season: A Perfect Ending?
                        </Link>
                      </h3>
                      <p className="text-muted-foreground mb-3 line-clamp-2" itemProp="description">
                        We analyze the conclusion to one of anime's most popular series and discuss whether it lived up
                        to expectations.
                      </p>
                      <Link href="#" className="text-primary font-medium hover:underline">
                        Read More
                      </Link>
                      <meta itemProp="author" content="RankMyChoice Team" />
                    </div>
                  </article>

                  {/* Post Item */}
                  <article
                    className="flex flex-col md:flex-row gap-6"
                    itemScope
                    itemType="https://schema.org/BlogPosting"
                  >
                    <div className="md:w-1/3">
                      <Link href="#" className="block relative aspect-video overflow-hidden rounded-lg group">
                        <Image
                          src="/placeholder.svg?height=200&width=350"
                          alt="Budget-friendly European destination with historic architecture"
                          fill
                          className="object-cover transition-transform duration-300 group-hover:scale-105"
                          itemProp="image"
                        />
                      </Link>
                    </div>
                    <div className="md:w-2/3">
                      <div className="flex items-center gap-3 text-sm text-muted-foreground mb-2">
                        <span itemProp="articleSection">Travel</span>
                        <span>•</span>
                        <time dateTime="2024-06-08" itemProp="datePublished">
                          June 8, 2024
                        </time>
                      </div>
                      <h3 className="text-xl font-bold mb-2" itemProp="headline">
                        <Link href="#" className="hover:text-primary">
                          Budget-Friendly European Destinations for Summer 2024
                        </Link>
                      </h3>
                      <p className="text-muted-foreground mb-3 line-clamp-2" itemProp="description">
                        Looking for an affordable European getaway? These destinations offer great experiences without
                        breaking the bank.
                      </p>
                      <Link href="#" className="text-primary font-medium hover:underline">
                        Read More
                      </Link>
                      <meta itemProp="author" content="RankMyChoice Team" />
                    </div>
                  </article>
                </div>

                <div className="mt-8 flex justify-center">
                  <Button>Load More</Button>
                </div>
              </div>

              {/* Sidebar */}
              <aside className="md:w-80 lg:w-96 space-y-8" aria-label="Sidebar">
                {/* Ad Widget */}
                <div className="border rounded-lg p-4 text-center bg-muted/30">
                  <p className="text-xs text-muted-foreground mb-2">Advertisement</p>
                  <div className="aspect-[4/3] bg-muted flex items-center justify-center">
                    <p className="text-muted-foreground">Ad Space (300x250)</p>
                  </div>
                </div>

                {/* Popular Posts */}
                <div className="border rounded-lg overflow-hidden">
                  <h3 className="text-lg font-bold p-4 border-b bg-muted/30">Popular Posts</h3>
                  <div className="divide-y">
                    <div className="p-4 flex gap-3">
                      <div className="w-20 shrink-0">
                        <div className="relative aspect-square overflow-hidden rounded">
                          <Image
                            src="/placeholder.svg?height=80&width=80"
                            alt="Budget smartphones comparison"
                            fill
                            className="object-cover"
                          />
                        </div>
                      </div>
                      <div>
                        <h4 className="font-medium line-clamp-2 mb-1">
                          <Link href="#" className="hover:text-primary">
                            Top 5 Smartphones Under $500 in 2024
                          </Link>
                        </h4>
                        <p className="text-xs text-muted-foreground">June 5, 2024</p>
                      </div>
                    </div>

                    <div className="p-4 flex gap-3">
                      <div className="w-20 shrink-0">
                        <div className="relative aspect-square overflow-hidden rounded">
                          <Image
                            src="/placeholder.svg?height=80&width=80"
                            alt="Video game characters from anticipated releases"
                            fill
                            className="object-cover"
                          />
                        </div>
                      </div>
                      <div>
                        <h4 className="font-medium line-clamp-2 mb-1">
                          <Link href="#" className="hover:text-primary">
                            The Most Anticipated Video Games of 2024
                          </Link>
                        </h4>
                        <p className="text-xs text-muted-foreground">June 3, 2024</p>
                      </div>
                    </div>

                    <div className="p-4 flex gap-3">
                      <div className="w-20 shrink-0">
                        <div className="relative aspect-square overflow-hidden rounded">
                          <Image
                            src="/placeholder.svg?height=80&width=80"
                            alt="International airline comparison"
                            fill
                            className="object-cover"
                          />
                        </div>
                      </div>
                      <div>
                        <h4 className="font-medium line-clamp-2 mb-1">
                          <Link href="#" className="hover:text-primary">
                            Best Airlines for International Travel in 2024
                          </Link>
                        </h4>
                        <p className="text-xs text-muted-foreground">May 30, 2024</p>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Categories Widget */}
                <div className="border rounded-lg overflow-hidden">
                  <h3 className="text-lg font-bold p-4 border-b bg-muted/30">Categories</h3>
                  <div className="p-4">
                    <ul className="space-y-2">
                      <li className="flex justify-between items-center">
                        <Link href="#" className="hover:text-primary">
                          Automotive
                        </Link>
                        <span className="text-sm text-muted-foreground">(24)</span>
                      </li>
                      <li className="flex justify-between items-center">
                        <Link href="#" className="hover:text-primary">
                          Movies & TV
                        </Link>
                        <span className="text-sm text-muted-foreground">(42)</span>
                      </li>
                      <li className="flex justify-between items-center">
                        <Link href="#" className="hover:text-primary">
                          Anime
                        </Link>
                        <span className="text-sm text-muted-foreground">(18)</span>
                      </li>
                      <li className="flex justify-between items-center">
                        <Link href="#" className="hover:text-primary">
                          Technology
                        </Link>
                        <span className="text-sm text-muted-foreground">(36)</span>
                      </li>
                      <li className="flex justify-between items-center">
                        <Link href="#" className="hover:text-primary">
                          Travel
                        </Link>
                        <span className="text-sm text-muted-foreground">(29)</span>
                      </li>
                      <li className="flex justify-between items-center">
                        <Link href="#" className="hover:text-primary">
                          Gaming
                        </Link>
                        <span className="text-sm text-muted-foreground">(15)</span>
                      </li>
                    </ul>
                  </div>
                </div>

                {/* Newsletter Widget */}
                <div className="border rounded-lg overflow-hidden">
                  <h3 className="text-lg font-bold p-4 border-b bg-muted/30">Subscribe to Newsletter</h3>
                  <div className="p-4">
                    <p className="text-sm text-muted-foreground mb-4">
                      Stay updated with our latest articles and news. No spam, we promise!
                    </p>
                    <form className="space-y-3">
                      <Input type="email" placeholder="Your email address" aria-label="Email for newsletter" required />
                      <Button className="w-full">Subscribe</Button>
                    </form>
                  </div>
                </div>

                {/* Tags Widget */}
                <div className="border rounded-lg overflow-hidden">
                  <h3 className="text-lg font-bold p-4 border-b bg-muted/30">Popular Tags</h3>
                  <div className="p-4 flex flex-wrap gap-2">
                    <Link
                      href="#"
                      className="px-3 py-1 bg-muted text-sm rounded-full hover:bg-primary hover:text-primary-foreground transition-colors"
                    >
                      Cars
                    </Link>
                    <Link
                      href="#"
                      className="px-3 py-1 bg-muted text-sm rounded-full hover:bg-primary hover:text-primary-foreground transition-colors"
                    >
                      Movies
                    </Link>
                    <Link
                      href="#"
                      className="px-3 py-1 bg-muted text-sm rounded-full hover:bg-primary hover:text-primary-foreground transition-colors"
                    >
                      Anime
                    </Link>
                    <Link
                      href="#"
                      className="px-3 py-1 bg-muted text-sm rounded-full hover:bg-primary hover:text-primary-foreground transition-colors"
                    >
                      Travel
                    </Link>
                    <Link
                      href="#"
                      className="px-3 py-1 bg-muted text-sm rounded-full hover:bg-primary hover:text-primary-foreground transition-colors"
                    >
                      Technology
                    </Link>
                    <Link
                      href="#"
                      className="px-3 py-1 bg-muted text-sm rounded-full hover:bg-primary hover:text-primary-foreground transition-colors"
                    >
                      Reviews
                    </Link>
                    <Link
                      href="#"
                      className="px-3 py-1 bg-muted text-sm rounded-full hover:bg-primary hover:text-primary-foreground transition-colors"
                    >
                      Gadgets
                    </Link>
                    <Link
                      href="#"
                      className="px-3 py-1 bg-muted text-sm rounded-full hover:bg-primary hover:text-primary-foreground transition-colors"
                    >
                      Food
                    </Link>
                  </div>
                </div>
              </aside>
            </div>
          </section>

          {/* Featured Posts Tabs */}
          <section className="py-10 bg-muted/30" aria-label="Featured content tabs">
            <div className="container">
              <h2 className="text-2xl font-bold mb-6">Featured Content</h2>

              <Tabs defaultValue="trending">
                <TabsList className="mb-6">
                  <TabsTrigger value="trending">Trending</TabsTrigger>
                  <TabsTrigger value="latest">Latest</TabsTrigger>
                  <TabsTrigger value="popular">Popular</TabsTrigger>
                  <TabsTrigger value="editors">Editor's Choice</TabsTrigger>
                </TabsList>

                <TabsContent value="trending" className="space-y-0">
                  <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    {[1, 2, 3, 4].map((item) => (
                      <article key={item} className="group" itemScope itemType="https://schema.org/BlogPosting">
                        <Link href="#" className="block">
                          <div className="relative aspect-[4/3] overflow-hidden rounded-lg mb-3">
                            <Image
                              src={`/placeholder.svg?height=240&width=320`}
                              alt={
                                item === 1
                                  ? "Electric aircraft prototype"
                                  : item === 2
                                    ? "Anime series collage for beginners"
                                    : item === 3
                                      ? "Car technology innovations"
                                      : "Hidden travel destinations"
                              }
                              fill
                              className="object-cover transition-transform duration-300 group-hover:scale-105"
                              itemProp="image"
                            />
                          </div>
                          <div className="space-y-2">
                            <span className="text-xs font-medium text-primary">Trending</span>
                            <h3 className="font-bold group-hover:text-primary" itemProp="headline">
                              {item === 1 && "The Future of Electric Aviation: What to Expect"}
                              {item === 2 && "10 Must-Watch Anime Series for Beginners"}
                              {item === 3 && "Latest Car Technology Innovations for 2024"}
                              {item === 4 && "Hidden Gems: Underrated Travel Destinations"}
                            </h3>
                            <p className="text-sm text-muted-foreground line-clamp-2" itemProp="description">
                              {item === 1 &&
                                "Electric aircraft are set to revolutionize the aviation industry. Here's what you need to know."}
                              {item === 2 &&
                                "New to anime? These series are perfect starting points for any newcomer to the medium."}
                              {item === 3 &&
                                "From autonomous driving to advanced infotainment, these are the top car tech innovations."}
                              {item === 4 &&
                                "Escape the crowds and discover these amazing destinations that fly under the radar."}
                            </p>
                          </div>
                        </Link>
                        <meta itemProp="datePublished" content="2024-06-01" />
                        <meta itemProp="author" content="RankMyChoice Team" />
                      </article>
                    ))}
                  </div>
                </TabsContent>

                <TabsContent value="latest" className="space-y-0">
                  <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    {[1, 2, 3, 4].map((item) => (
                      <article key={item} className="group" itemScope itemType="https://schema.org/BlogPosting">
                        <Link href="#" className="block">
                          <div className="relative aspect-[4/3] overflow-hidden rounded-lg mb-3">
                            <Image
                              src={`/placeholder.svg?height=240&width=320`}
                              alt={
                                item === 1
                                  ? "New smartphone releases comparison"
                                  : item === 2
                                    ? "Summer movie preview poster"
                                    : item === 3
                                      ? "New restaurant interior"
                                      : "Gaming consoles comparison"
                              }
                              fill
                              className="object-cover transition-transform duration-300 group-hover:scale-105"
                              itemProp="image"
                            />
                          </div>
                          <div className="space-y-2">
                            <span className="text-xs font-medium text-primary">Latest</span>
                            <h3 className="font-bold group-hover:text-primary" itemProp="headline">
                              {item === 1 && "New Smartphone Releases: What's Worth Buying"}
                              {item === 2 && "Summer Movie Preview: Blockbusters Coming Soon"}
                              {item === 3 && "The Best New Restaurants in Major Cities"}
                              {item === 4 && "Latest Gaming Console Comparison: Which to Buy"}
                            </h3>
                          </div>
                        </Link>
                        <meta itemProp="datePublished" content="2024-06-01" />
                        <meta itemProp="author" content="RankMyChoice Team" />
                      </article>
                    ))}
                  </div>
                </TabsContent>

                <TabsContent value="popular" className="space-y-0">
                  <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    {[1, 2, 3, 4].map((item) => (
                      <article key={item} className="group" itemScope itemType="https://schema.org/BlogPosting">
                        <Link href="#" className="block">
                          <div className="relative aspect-[4/3] overflow-hidden rounded-lg mb-3">
                            <Image
                              src={`/placeholder.svg?height=240&width=320`}
                              alt={
                                item === 1
                                  ? "Popular summer travel destinations"
                                  : item === 2
                                    ? "Top-rated anime series collection"
                                    : item === 3
                                      ? "Best-selling cars showcase"
                                      : "Most anticipated movies poster"
                              }
                              fill
                              className="object-cover transition-transform duration-300 group-hover:scale-105"
                              itemProp="image"
                            />
                          </div>
                          <div className="space-y-2">
                            <span className="text-xs font-medium text-primary">Popular</span>
                            <h3 className="font-bold group-hover:text-primary" itemProp="headline">
                              {item === 1 && "Most Popular Destinations for Summer 2024"}
                              {item === 2 && "Top-Rated Anime Series of All Time"}
                              {item === 3 && "Best-Selling Cars in Different Categories"}
                              {item === 4 && "Most Anticipated Movies of the Year"}
                            </h3>
                          </div>
                        </Link>
                        <meta itemProp="datePublished" content="2024-06-01" />
                        <meta itemProp="author" content="RankMyChoice Team" />
                      </article>
                    ))}
                  </div>
                </TabsContent>

                <TabsContent value="editors" className="space-y-0">
                  <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    {[1, 2, 3, 4].map((item) => (
                      <article key={item} className="group" itemScope itemType="https://schema.org/BlogPosting">
                        <Link href="#" className="block">
                          <div className="relative aspect-[4/3] overflow-hidden rounded-lg mb-3">
                            <Image
                              src={`/placeholder.svg?height=240&width=320`}
                              alt={
                                item === 1
                                  ? "Underrated films collection"
                                  : item === 2
                                    ? "Hidden gems in automotive"
                                    : item === 3
                                      ? "Anime masterpieces showcase"
                                      : "Revolutionary tech products"
                              }
                              fill
                              className="object-cover transition-transform duration-300 group-hover:scale-105"
                              itemProp="image"
                            />
                          </div>
                          <div className="space-y-2">
                            <span className="text-xs font-medium text-primary">Editor's Choice</span>
                            <h3 className="font-bold group-hover:text-primary" itemProp="headline">
                              {item === 1 && "Underrated Films You Need to Watch"}
                              {item === 2 && "Hidden Gems in the Automotive World"}
                              {item === 3 && "Anime Masterpieces That Define the Medium"}
                              {item === 4 && "Tech Products That Changed Everything"}
                            </h3>
                          </div>
                        </Link>
                        <meta itemProp="datePublished" content="2024-06-01" />
                        <meta itemProp="author" content="RankMyChoice Team" />
                      </article>
                    ))}
                  </div>
                </TabsContent>
              </Tabs>
            </div>
          </section>

          {/* Ad Banner */}
          <section className="py-8 container" aria-label="Advertisement">
            <div className="border rounded-lg p-4 text-center bg-muted/30">
              <p className="text-xs text-muted-foreground mb-2">Advertisement</p>
              <div className="aspect-[6/1] bg-muted flex items-center justify-center">
                <p className="text-muted-foreground">Ad Space (728x90)</p>
              </div>
            </div>
          </section>
        </main>

        {/* Footer */}
        <footer className="bg-muted/50 border-t" aria-labelledby="footer-heading">
          <h2 id="footer-heading" className="sr-only">
            Footer
          </h2>
          {/* Footer Widgets */}
          <div className="container py-10">
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              {/* About Widget */}
              <div>
                <h3 className="text-lg font-bold mb-4">About RankMyChoice</h3>
                <p className="text-muted-foreground mb-4">
                  RankMyChoice.com is your go-to source for rankings, reviews, and insights on everything from cars to
                  movies, anime to travel destinations.
                </p>
                <div className="flex gap-3">
                  <Link
                    href="#"
                    className="h-8 w-8 flex items-center justify-center rounded-full bg-primary text-primary-foreground hover:opacity-90"
                    aria-label="Follow us on Facebook"
                  >
                    <Facebook size={16} aria-hidden="true" />
                  </Link>
                  <Link
                    href="#"
                    className="h-8 w-8 flex items-center justify-center rounded-full bg-primary text-primary-foreground hover:opacity-90"
                    aria-label="Follow us on Twitter"
                  >
                    <Twitter size={16} aria-hidden="true" />
                  </Link>
                  <Link
                    href="#"
                    className="h-8 w-8 flex items-center justify-center rounded-full bg-primary text-primary-foreground hover:opacity-90"
                    aria-label="Follow us on Instagram"
                  >
                    <Instagram size={16} aria-hidden="true" />
                  </Link>
                  <Link
                    href="#"
                    className="h-8 w-8 flex items-center justify-center rounded-full bg-primary text-primary-foreground hover:opacity-90"
                    aria-label="Subscribe to our YouTube channel"
                  >
                    <Youtube size={16} aria-hidden="true" />
                  </Link>
                </div>
              </div>

              {/* Quick Links */}
              <div>
                <h3 className="text-lg font-bold mb-4">Quick Links</h3>
                <ul className="space-y-2">
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      About Us
                    </Link>
                  </li>
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      Contact Us
                    </Link>
                  </li>
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      Privacy Policy
                    </Link>
                  </li>
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      Terms of Service
                    </Link>
                  </li>
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      Advertise With Us
                    </Link>
                  </li>
                </ul>
              </div>

              {/* Categories */}
              <div>
                <h3 className="text-lg font-bold mb-4">Categories</h3>
                <ul className="space-y-2">
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      Automotive
                    </Link>
                  </li>
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      Entertainment
                    </Link>
                  </li>
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      Technology
                    </Link>
                  </li>
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      Travel
                    </Link>
                  </li>
                  <li>
                    <Link href="#" className="text-muted-foreground hover:text-primary">
                      Anime
                    </Link>
                  </li>
                </ul>
              </div>

              {/* Newsletter */}
              <div>
                <h3 className="text-lg font-bold mb-4">Newsletter</h3>
                <p className="text-muted-foreground mb-4">
                  Subscribe to our newsletter for the latest updates and exclusive content.
                </p>
                <form className="space-y-3">
                  <Input type="email" placeholder="Your email address" aria-label="Email for newsletter" required />
                  <Button className="w-full">Subscribe</Button>
                </form>
              </div>
            </div>
          </div>

          {/* Copyright */}
          <div className="border-t py-6">
            <div className="container flex flex-col md:flex-row justify-between items-center gap-4">
              <p className="text-sm text-muted-foreground">
                &copy; {new Date().getFullYear()} RankMyChoice.com. All rights reserved.
              </p>
              <ul className="flex gap-6">
                <li>
                  <Link href="#" className="text-sm text-muted-foreground hover:text-primary">
                    Privacy Policy
                  </Link>
                </li>
                <li>
                  <Link href="#" className="text-sm text-muted-foreground hover:text-primary">
                    Terms of Service
                  </Link>
                </li>
                <li>
                  <Link href="#" className="text-sm text-muted-foreground hover:text-primary">
                    Cookie Policy
                  </Link>
                </li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </>
  )
}

