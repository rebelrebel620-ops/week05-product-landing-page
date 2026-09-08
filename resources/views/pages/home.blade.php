@extends('layouts.app')

@section('content')

    <!-- Navigation -->
    <x-navbar />

    <!-- Hero -->
    <x-hero />


    <!-- Features -->
    <section id="features" class="bg-slate-50 py-24">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-sm font-bold uppercase tracking-widest text-slate-500">
                    Powerful Features
                </p>

                <h2 class="mt-3 text-4xl font-bold tracking-tight text-slate-950 sm:text-5xl">
                    Everything your team needs
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    NexaFlow gives your team the tools needed to organize,
                    collaborate, and complete work efficiently.
                </p>

            </div>


            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <x-feature-card
                    icon="✓"
                    title="Task Management"
                    description="Create, assign, organize, and track tasks from one simple workspace."
                />

                <x-feature-card
                    icon="↗"
                    title="Team Collaboration"
                    description="Keep everyone connected with shared projects, comments, and updates."
                />

                <x-feature-card
                    icon="◷"
                    title="Smart Scheduling"
                    description="Plan deadlines and organize your team's workload with ease."
                />

                <x-feature-card
                    icon="▣"
                    title="Project Dashboard"
                    description="See project progress, upcoming work, and important metrics at a glance."
                />

                <x-feature-card
                    icon="⚡"
                    title="Fast Automation"
                    description="Automate repetitive tasks so your team can focus on important work."
                />

                <x-feature-card
                    icon="🔒"
                    title="Secure Workspace"
                    description="Keep business information organized with secure access controls."
                />

            </div>

        </div>

    </section>


    <!-- Product Showcase -->
    <section id="showcase" class="py-24">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="grid items-center gap-16 lg:grid-cols-2">

                <!-- Dashboard Preview -->
                <div class="order-2 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl lg:order-1">

                    <div class="border-b border-slate-200 bg-slate-50 p-4">
                        <div class="flex items-center justify-between">

                            <div class="flex gap-2">
                                <div class="h-3 w-3 rounded-full bg-slate-300"></div>
                                <div class="h-3 w-3 rounded-full bg-slate-300"></div>
                                <div class="h-3 w-3 rounded-full bg-slate-300"></div>
                            </div>

                            <div class="h-6 w-24 rounded bg-slate-200"></div>

                        </div>
                    </div>

                    <div class="p-6">

                        <div class="flex items-center justify-between">
                            <div>
                                <div class="h-5 w-32 rounded bg-slate-800"></div>
                                <div class="mt-2 h-3 w-48 rounded bg-slate-100"></div>
                            </div>

                            <div class="h-9 w-20 rounded-lg bg-slate-900"></div>
                        </div>

                        <div class="mt-8 grid gap-4 sm:grid-cols-3">

                            <div class="rounded-xl bg-slate-50 p-5">
                                <div class="text-sm text-slate-500">Projects</div>
                                <div class="mt-2 text-3xl font-bold">24</div>
                            </div>

                            <div class="rounded-xl bg-slate-50 p-5">
                                <div class="text-sm text-slate-500">Tasks Done</div>
                                <div class="mt-2 text-3xl font-bold">186</div>
                            </div>

                            <div class="rounded-xl bg-slate-50 p-5">
                                <div class="text-sm text-slate-500">Team</div>
                                <div class="mt-2 text-3xl font-bold">18</div>
                            </div>

                        </div>

                        <div class="mt-6 rounded-xl border border-slate-200 p-5">

                            <div class="flex justify-between">
                                <span class="font-semibold">Project Progress</span>
                                <span class="text-sm text-slate-500">82%</span>
                            </div>

                            <div class="mt-4 h-3 overflow-hidden rounded-full bg-slate-100">
                                <div class="h-full w-[82%] rounded-full bg-slate-900"></div>
                            </div>

                            <div class="mt-6 space-y-4">

                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-600">Website redesign</span>
                                    <span class="text-sm font-semibold">Complete</span>
                                </div>

                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-600">Marketing campaign</span>
                                    <span class="text-sm font-semibold">72%</span>
                                </div>

                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-600">Mobile application</span>
                                    <span class="text-sm font-semibold">54%</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Text -->
                <div class="order-1 lg:order-2">

                    <p class="text-sm font-bold uppercase tracking-widest text-slate-500">
                        Product Showcase
                    </p>

                    <h2 class="mt-4 text-4xl font-bold tracking-tight text-slate-950 sm:text-5xl">
                        One dashboard.
                        <span class="text-slate-500">
                            Complete visibility.
                        </span>
                    </h2>

                    <p class="mt-6 text-lg leading-8 text-slate-600">
                        Get a clear overview of your projects, tasks, and team
                        performance without switching between multiple tools.
                    </p>

                    <div class="mt-8 space-y-5">

                        <div class="flex gap-4">
                            <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-slate-900 text-sm text-white">
                                ✓
                            </div>

                            <div>
                                <h3 class="font-bold">Real-time progress</h3>
                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Monitor project performance as your team works.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-slate-900 text-sm text-white">
                                ✓
                            </div>

                            <div>
                                <h3 class="font-bold">Mobile friendly</h3>
                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Access your workspace from desktop, tablet, or mobile.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-slate-900 text-sm text-white">
                                ✓
                            </div>

                            <div>
                                <h3 class="font-bold">Simple interface</h3>
                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Designed to be easy to understand from day one.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Pricing -->
    <section id="pricing" class="bg-slate-50 py-24">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-sm font-bold uppercase tracking-widest text-slate-500">
                    Simple Pricing
                </p>

                <h2 class="mt-3 text-4xl font-bold tracking-tight text-slate-950 sm:text-5xl">
                    Plans that grow with you
                </h2>

                <p class="mt-5 text-lg text-slate-600">
                    Start small and upgrade when your team needs more.
                </p>

            </div>


            <div class="mx-auto mt-16 grid max-w-6xl gap-8 lg:grid-cols-3">

                <!-- Starter -->
                <x-pricing-card
                    name="Starter"
                    price="₱499"
                    description="For individuals and small projects."
                >
                    <li>✓ Up to 5 team members</li>
                    <li>✓ 10 active projects</li>
                    <li>✓ Task management</li>
                    <li>✓ Basic dashboard</li>
                    <li>✓ Email support</li>
                </x-pricing-card>


                <!-- Professional -->
                <x-pricing-card
                    name="Professional"
                    price="₱999"
                    description="For growing teams and businesses."
                    :featured="true"
                >
                    <li>✓ Up to 25 team members</li>
                    <li>✓ Unlimited projects</li>
                    <li>✓ Advanced dashboard</li>
                    <li>✓ Team collaboration</li>
                    <li>✓ Smart automation</li>
                    <li>✓ Priority support</li>
                </x-pricing-card>


                <!-- Enterprise -->
                <x-pricing-card
                    name="Enterprise"
                    price="Custom"
                    description="For larger organizations."
                >
                    <li>✓ Unlimited team members</li>
                    <li>✓ Unlimited projects</li>
                    <li>✓ Advanced security</li>
                    <li>✓ Custom integrations</li>
                    <li>✓ Dedicated support</li>
                    <li>✓ Custom reporting</li>
                </x-pricing-card>

            </div>

        </div>

    </section>


    <!-- Testimonials -->
    <section id="testimonials" class="py-24">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-sm font-bold uppercase tracking-widest text-slate-500">
                    Testimonials
                </p>

                <h2 class="mt-3 text-4xl font-bold tracking-tight text-slate-950 sm:text-5xl">
                    Loved by productive teams
                </h2>

                <p class="mt-5 text-lg text-slate-600">
                    See how teams use NexaFlow to organize their everyday work.
                </p>

            </div>


            <div class="mt-16 grid gap-6 lg:grid-cols-3">

                <x-testimonial-card
                    name="Maria Santos"
                    position="Project Manager"
                    initials="MS"
                    review="NexaFlow helped our team organize our projects without making the process complicated. Everything is easy to find."
                />

                <x-testimonial-card
                    name="Daniel Cruz"
                    position="Startup Founder"
                    initials="DC"
                    review="The dashboard gives me a quick overview of what our team is working on. It saves us a lot of time every week."
                />

                <x-testimonial-card
                    name="Angela Reyes"
                    position="Marketing Lead"
                    initials="AR"
                    review="We finally have one place for tasks, deadlines, and team updates. The interface is simple and easy to use."
                />

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="px-6 pb-24 lg:px-8">

        <div class="mx-auto max-w-7xl overflow-hidden rounded-3xl bg-slate-950 px-6 py-16 text-center sm:px-12 lg:px-16">

            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                Ready to work smarter?
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-slate-400">
                Start organizing your team's work today with NexaFlow.
                No complicated setup required.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row">

                <a href="#pricing"
                   class="rounded-xl bg-white px-6 py-3.5 text-sm font-semibold text-slate-950 transition hover:bg-slate-200">
                    Start Free Trial
                </a>

                <a href="#contact"
                   class="rounded-xl border border-slate-700 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-slate-800">
                    Contact Sales
                </a>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <x-footer />

@endsection